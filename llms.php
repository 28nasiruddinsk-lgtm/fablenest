<?php
// /llms.txt: a short, plain-text description of the site for AI assistants (answer engines).
require __DIR__ . '/inc/seo-lib.php';
$c = require __DIR__ . '/content.php';
$seo = require __DIR__ . '/content-seo.php';
header('Content-Type: text/plain; charset=utf-8');
$name = $c['logo'];
echo "# $name\n\n> " . $seo['home']['answer'] . "\n\n";
echo "## Main pages\n";
foreach (seo_pages($c) as $key => [$path, $label]) {
    echo '- [' . $label . '](' . seo_url($c, $path) . '): ' . $seo[$key]['description'] . "\n";
}
echo "\n## Services\n";
foreach (seo_pages($c) as $key => [$path, $label]) {
    if (in_array($key, ['home', 'about'], true)) continue;
    echo "\n### $label\n" . $seo[$key]['answer'] . "\n";
    foreach ($seo[$key]['faq'] as [$q, $a]) echo "\n- Q: $q\n  A: $a\n";
}
echo "\n## Contact\nUse the contact form at " . seo_url($c, '#contact') . "\n";