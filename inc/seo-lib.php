<?php
// Helpers shared by the head tags, sitemap.xml, llms.txt and robots.txt.

// https://host/folder, taken from the current request (set $c['site']['url'] in content.php to force one)
function seo_base(array $c): string
{
    if (!empty($c['site']['url'])) return rtrim($c['site']['url'], '/');
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https';
    $dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
    return ($https ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . $dir;
}

// every page of the site: key => [path, label]
function seo_pages(array $c): array
{
    $pages = ['home' => ['', 'Home'], 'about' => ['about.php', 'About Us'], 'book-publishing' => ['book-publishing.php', 'Book Publishing']];
    foreach ((require __DIR__ . '/../content-services.php') as $slug => $s) $pages[$slug] = ['service.php?s=' . $slug, $s['name']];
    return $pages;
}

function seo_url(array $c, string $path): string
{
    return seo_base($c) . '/' . $path;
}