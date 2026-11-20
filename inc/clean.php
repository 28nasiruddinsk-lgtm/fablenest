<?php
// Clean URLs: the pages are written with about.php / service.php?s=x links, the visitor and search engines see /about and /service-x.
// .htaccess maps the clean URLs back to the PHP files and 301-redirects the old ones.
ob_start(function ($h) {
    $h = preg_replace('#(href=")(?:https?://[^/"]+/)?guide\.php\?g=([a-z0-9-]+)#', '$1/$2', $h);
    $h = preg_replace('#href="index\.php(\#[a-z-]*)?"#', 'href="/$1"', $h);
    $h = preg_replace('#href="(about|book-publishing)\.php(\#[a-z-]*)?"#', 'href="/$1$2"', $h);
    return preg_replace('#href="service\.php\?s=([a-z0-9-]+)#', 'href="/service-$1', $h);
});
