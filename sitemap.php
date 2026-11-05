<?php
// /sitemap.xml: every page with the date its words last changed.
require __DIR__ . '/inc/seo-lib.php';
$c = require __DIR__ . '/content.php';
header('Content-Type: application/xml; charset=utf-8');
$mod = date('Y-m-d', max(filemtime(__DIR__ . '/content-seo.php'), filemtime(__DIR__ . '/content-services.php'), filemtime(__DIR__ . '/content.php')));
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach (seo_pages($c) as $key => [$path]) {
    $prio = $key === 'home' ? '1.0' : ($key === 'about' ? '0.7' : '0.8');
    echo '  <url><loc>' . htmlspecialchars(seo_url($c, $path), ENT_XML1) . '</loc><lastmod>' . $mod . '</lastmod><changefreq>monthly</changefreq><priority>' . $prio . "</priority></url>\n";
}
echo "</urlset>\n";