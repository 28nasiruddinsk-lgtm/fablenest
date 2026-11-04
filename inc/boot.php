<?php
// Shared setup for the About Us page: the content and the small helpers the shared sections use.
$c = require dirname(__DIR__) . '/content.php';
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$br = fn(array $lines) => implode('<br>', array_map(fn($l) => $l === '' ? '&nbsp;' : htmlspecialchars($l, ENT_NOQUOTES, 'UTF-8'), $lines));
$stories = $c['stories']['items'];
