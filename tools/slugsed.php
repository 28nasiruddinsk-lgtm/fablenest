<?php
// sed rules for the keyword addresses in inc/slugs.php (used by tools/export.sh).
$m = require __DIR__ . '/../inc/slugs.php';
$b = $m['book-publishing'];
$pre = '(href="|https://[^/"]+/|<loc>https://[^<]*/)';
echo 's#href="book-publishing\.php(\#[a-z-]*)?"#href="/' . $b . '\1"#g' . "\n";
echo 's#(https://[^/" <]+/)book-publishing\.php#\1' . $b . '#g' . "\n";
foreach ($m['services'] as $k => $v) {
    echo 's#' . $pre . 'service\.php\?s=' . $k . '#\1' . $v . '#g' . "\n";
    echo 's#service\.php\?s=' . $k . '#/' . $v . '#g' . "\n";
}
