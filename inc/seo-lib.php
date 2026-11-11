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
        'home' => ['book', 'puddle', 'seeds'], 'about' => ['seeds', 'hanging', 'bubbles'], 'book-publishing' => ['flying', 'book', 'music'],
        'book-illustrations' => ['puddle', 'bubbles', 'hanging'], 'author-branding' => ['music', 'seeds', 'puddle'], 'author-website' => ['hanging', 'music', 'flying'],
        'social-media-marketing' => ['bubbles', 'puddle', 'book'], 'book-trailer' => ['music', 'flying', 'bubbles'], 'press-release' => ['seeds', 'book', 'hanging'],
        'copyright-registration' => ['book', 'puddle', 'seeds'],
    ][$key] ?? ['book', 'flying', 'seeds'];
    return array_map(fn($k) => $m[$k], $set);
}
// one mascot by name, or the one used for a page's picture slots: seo_mascot('flying') / seo_pic($key, $slot)
function seo_mascot(string $name): array
{
    $all = ['book', 'seeds', 'puddle', 'flying', 'music', 'hanging', 'bubbles'];
    $table = [
        'book' => ['assets/s/mascot-book.jpg', 'A chick in a cap and round glasses hugging a green storybook'],
        'seeds' => ['assets/s/mascot-seeds.jpg', 'A chick in a checked shirt holding a basket of seeds for little birds'],
        'puddle' => ['assets/s/mascot-puddle.jpg', 'A chick in a cap looking at its reflection in a puddle'],
        'flying' => ['assets/s/mascot-flying.jpg', 'A chick in a cap and backpack flying on a big open red book'],
        'music' => ['assets/s/mascot-music.jpg', 'A chick in headphones dancing to music'],
        'hanging' => ['assets/s/mascot-hanging.jpg', 'A chick hanging upside down from a tree branch'],
        'bubbles' => ['assets/s/mascot-bubbles.jpg', 'A chick in a blue cap blowing soap bubbles'],
    ];
    return $table[$name] ?? $table[$all[0]];
}

// picture for the intro / vision / answer / related slots of a page: always a mascot the guide, glossary and FAQ blocks of that page do not already use
function seo_pic(string $key, int $slot = 0): array
{
    $names = ['book', 'seeds', 'puddle', 'flying', 'music', 'hanging', 'bubbles'];
    $used = [];
    foreach (seo_mascots($key) as $m) $used[] = $m[0];
    $free = array_values(array_filter($names, fn($n) => !in_array(seo_mascot($n)[0], $used, true)));
    $pages = ['home', 'about', 'book-publishing', 'book-illustrations', 'author-branding', 'author-website', 'social-media-marketing', 'book-trailer', 'press-release', 'copyright-registration'];
    $i = array_search($key, $pages, true);
    return seo_mascot($free[((($i === false ? 0 : $i) + $slot) % count($free))]);
}
// cut-out (no background) version of a mascot picture
function seo_cut(string $src): string
{
    if (str_contains($src, 'mascot-flying')) return 'assets/s/mascot-flying-cut.png';
    return preg_replace('#mascot-([a-z]+)\.jpg$#', 'mc-$1.png', $src);
}