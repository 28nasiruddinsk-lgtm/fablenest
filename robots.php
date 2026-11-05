<?php
// /robots.txt: search engines and AI crawlers may read the public pages; private folders are off limits.
require __DIR__ . '/inc/seo-lib.php';
$c = require __DIR__ . '/content.php';
header('Content-Type: text/plain; charset=utf-8');
$dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
?>
User-agent: *
Allow: /
Disallow: <?= $dir ?>/data/
Disallow: <?= $dir ?>/inc/
Disallow: <?= $dir ?>/submit.php

Sitemap: <?= seo_url($c, 'sitemap.xml') ?>

# Plain-language summary of the site for AI assistants
# <?= seo_url($c, 'llms.txt') ?>