<?php
// Saves a form submission to data/leads.csv.
// fetch() gets JSON back; a plain form post (no JavaScript) is sent back to the page.
const MAX_PER_HOUR = 8;

$json = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');

function reply(bool $ok, string $message, bool $json): never
{
    if ($json) {
        header('Content-Type: application/json');
        http_response_code($ok ? 200 : 422);
        echo json_encode(['ok' => $ok, 'message' => $message]);
    } else {
        header('Location: ./?sent=' . (int)$ok . '#contact');
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}
if (!empty($_POST['website'])) reply(true, 'Thank you!', $json); // hidden field only bots fill in

$field = fn(string $k, int $max) => trim(mb_substr(preg_replace('/[\r\n\t]+/', ' ', (string)($_POST[$k] ?? '')), 0, $max));
$form = $field('form', 20);
$name = $field('name', 100);
$email = $field('email', 150);
$phone = $field('phone', 40);
$message = $field('message', 1000);

if ($form === 'newsletter' ? $email === '' : $name === '') reply(false, 'Please fill in the form', $json);
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) reply(false, 'Check your email', $json);
if ($form !== 'newsletter' && $email === '' && $phone === '') reply(false, 'Add an email or phone', $json);

$dir = __DIR__ . '/data';
$file = $dir . '/leads.csv';
if (!is_dir($dir)) mkdir($dir, 0755, true);

// simple flood limit per visitor
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$recent = 0;
if (is_file($file)) {
    foreach (array_slice(file($file), -200) as $line) {
        $row = str_getcsv($line);
        if (($row[6] ?? '') === $ip && strtotime($row[0] ?? '') > time() - 3600) $recent++;
    }
}
if ($recent >= MAX_PER_HOUR) reply(false, 'Too many requests, try later', $json);

// a leading = + - @ would be run as a formula if the CSV is opened in Excel
$safe = fn(string $v) => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v;
$isNew = !is_file($file) || filesize($file) === 0;
$fh = fopen($file, 'ab');
flock($fh, LOCK_EX);
if ($isNew) fputcsv($fh, ['time', 'form', 'name', 'email', 'phone', 'message', 'ip']);
fputcsv($fh, [date('c'), $form, $safe($name), $safe($email), $safe($phone), $safe($message), $ip]);
flock($fh, LOCK_UN);
fclose($fh);

reply(true, $form === 'newsletter' ? 'Subscribed' : 'Thank you!', $json);
