<?php
// Shared setup for the wireframe pages: the content, and small helpers used by every partial.
$c = require dirname(__DIR__) . '/content.php';
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
// grey placeholder box with a pencil cross
$ph = fn(string $label, string $cls = '') => '<div class="ph ' . $cls . '"><span>' . $e($label) . '</span></div>';
// nav links point at the home page sections unless they are real pages
$href = fn($h) => $h === '#top' ? 'index.php' : (str_starts_with($h, '#') ? 'index.php' . $h : $h);
$story = $c['stories']['items'][0];