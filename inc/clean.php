<?php
// Clean URLs: the pages are written with about.php / service.php?s=x links, the visitor and search engines see /about and /childrens-book-illustration-services.
// .htaccess maps the clean URLs back to the PHP files and 301-redirects the old ones. The keyword addresses live in inc/slugs.php.
require_once __DIR__ . '/text.php';
$sl = require __DIR__ . '/slugs.php';
ob_start(function ($h) use ($sl) {
    $h = preg_replace('#(href=")(?:https?://[^/"]+/)?guide\.php\?g=([a-z0-9-]+)#', '$1/$2', $h);
    $h = preg_replace('#href="index\.php(\#[a-z-]*)?"#', 'href="/$1"', $h);
    $h = preg_replace('#href="about\.php(\#[a-z-]*)?"#', 'href="/about$1"', $h);
    $h = preg_replace('#href="book-publishing\.php(\#[a-z-]*)?"#', 'href="/' . $sl['book-publishing'] . '$1"', $h);
    return preg_replace_callback('#href="service\.php\?s=([a-z0-9-]+)#', fn($m) => 'href="/' . ($sl['services'][$m[1]] ?? 'service-' . $m[1]), $h);
});
