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
// the yellow chick mascots used in the guide, glossary and FAQ blocks: key => [guide picture, glossary picture, FAQ picture]
function seo_mascots(string $key): array
{
    $m = [
        'book' => ['assets/s/mascot-book.jpg', 'A chick in a cap and round glasses hugging a green storybook'],
        'seeds' => ['assets/s/mascot-seeds.jpg', 'A chick in a checked shirt holding a basket of seeds for little birds'],
        'puddle' => ['assets/s/mascot-puddle.jpg', 'A chick in a cap looking at its reflection in a puddle'],
        'flying' => ['assets/s/mascot-flying.jpg', 'A chick in a cap and backpack flying on a big open red book'],
        'music' => ['assets/s/mascot-music.jpg', 'A chick in headphones dancing to music'],
        'hanging' => ['assets/s/mascot-hanging.jpg', 'A chick hanging upside down from a tree branch'],
        'bubbles' => ['assets/s/mascot-bubbles.jpg', 'A chick in a blue cap blowing soap bubbles'],
    ];
    $set = [
        'home' => ['book', 'flying', 'seeds'], 'about' => ['seeds', 'hanging', 'bubbles'], 'book-publishing' => ['flying', 'book', 'music'],
        'book-illustrations' => ['puddle', 'bubbles', 'hanging'], 'author-branding' => ['music', 'seeds', 'puddle'], 'author-website' => ['hanging', 'music', 'flying'],
        'social-media-marketing' => ['bubbles', 'puddle', 'book'], 'book-trailer' => ['music', 'flying', 'bubbles'], 'press-release' => ['seeds', 'book', 'hanging'],
        'copyright-registration' => ['book', 'puddle', 'seeds'],
    ][$key] ?? ['book', 'flying', 'seeds'];
    return array_map(fn($k) => $m[$k], $set);
}