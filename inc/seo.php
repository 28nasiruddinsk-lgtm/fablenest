<?php
// <title>, meta tags, Open Graph, canonical and JSON-LD for the page named in $seoKey.
require_once __DIR__ . '/seo-lib.php';
$seoAll = require dirname(__DIR__) . '/content-seo.php';
$seoPages = seo_pages($c);
$seoKey = $seoKey ?? 'home';
$sp = $seoAll[$seoKey] ?? null;
[$seoPath, $seoLabel] = $seoPages[$seoKey] ?? ['', $c['title']];
$seoTitle = $sp['title'] ?? ($title ?? $c['title']);
$seoDesc = $sp['description'] ?? $c['description'];
$siteBase = seo_base($c);
$seoUrl = $seoPath === '' ? $siteBase . '/' : $siteBase . '/' . $seoPath;
$orgName = $c['logo'];
$org = ['@type' => 'Organization', '@id' => $siteBase . '/#org', 'name' => $orgName, 'url' => $siteBase . '/', 'logo' => $siteBase . '/assets/logo.png',
    'description' => $c['description']];
$same = array_values(array_filter(array_map(fn($s) => $s[1] !== '#' ? $s[1] : null, $c['footer']['social'])));
if ($same) $org['sameAs'] = $same;
$graph = [
    $org,
    ['@type' => 'WebSite', '@id' => $siteBase . '/#site', 'url' => $siteBase . '/', 'name' => $orgName, 'publisher' => ['@id' => $siteBase . '/#org'], 'inLanguage' => 'en'],
];
$crumbs = [['Home', $siteBase . '/']];
if ($seoKey === 'about') $crumbs[] = ['About Us', $seoUrl];
elseif ($seoKey !== 'home') { $crumbs[] = ['Services', $siteBase . '/#services']; $crumbs[] = [$seoLabel, $seoUrl]; }
$graph[] = ['@type' => 'WebPage', '@id' => $seoUrl . '#page', 'url' => $seoUrl, 'name' => $seoTitle, 'description' => $seoDesc, 'isPartOf' => ['@id' => $siteBase . '/#site'], 'about' => ['@id' => $siteBase . '/#org'], 'inLanguage' => 'en'];
if ($seoKey !== 'home') {
    $graph[] = ['@type' => 'BreadcrumbList', 'itemListElement' => array_map(fn($i, $cr) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $cr[0], 'item' => $cr[1]], array_keys($crumbs), $crumbs)];
}
if (!in_array($seoKey, ['home', 'about'], true)) {
    $graph[] = ['@type' => 'Service', 'name' => $seoLabel, 'description' => $seoDesc, 'serviceType' => $seoLabel, 'url' => $seoUrl, 'provider' => ['@id' => $siteBase . '/#org']];
}
$guideAll = require dirname(__DIR__) . '/content-guide.php';
$gd = $guideAll[$seoKey] ?? null;
if ($gd) {
    $graph[] = ['@type' => 'HowTo', 'name' => $gd['title'], 'description' => $gd['lead'], 'step' => array_map(fn($st, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $st[0], 'text' => $st[1]], $gd['steps'], array_keys($gd['steps']))];
    $graph[] = ['@type' => 'DefinedTermSet', 'name' => $seoLabel . ' glossary', 'hasDefinedTerm' => array_map(fn($t) => ['@type' => 'DefinedTerm', 'name' => $t[0], 'description' => $t[1]], $gd['terms'])];
}
if (!empty($sp['faq'])) {
    $graph[] = ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $sp['faq'])];
}
$ogImage = $siteBase . '/assets/s/ladder.jpg';
?>
<title><?= $e($seoTitle) ?></title>
<meta name="description" content="<?= $e($seoDesc) ?>">
<link rel="canonical" href="<?= $e($seoUrl) ?>">
<meta name="robots" content="<?= !empty($noindex) ? 'noindex, follow' : 'index, follow, max-image-preview:large' ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $e($orgName) ?>">
<meta property="og:title" content="<?= $e($seoTitle) ?>">
<meta property="og:description" content="<?= $e($seoDesc) ?>">
<meta property="og:url" content="<?= $e($seoUrl) ?>">
<meta property="og:image" content="<?= $e($ogImage) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $e($seoTitle) ?>">
<meta name="twitter:description" content="<?= $e($seoDesc) ?>">
<meta name="twitter:image" content="<?= $e($ogImage) ?>">
<meta name="theme-color" content="#002a1c">
<script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>