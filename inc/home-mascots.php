<?php
// Extra chick mascots scattered over the home page. Positions are page coordinates of the 1920 px design.
// c = round badge, cut = cut-out (no background). [name, x, y, width, kind, delay seconds, tilt degrees]
$hm = [
    ['flying', 1470, 2018, 270, 'cut', 0, -4],
    ['music', 108, 2614, 190, 'c', .4, -6],
    ['bubbles', 1622, 2614, 190, 'c', 1.1, 6],
    ['hanging', 58, 5568, 170, 'c', .2, 5],
    ['seeds', 1692, 6122, 170, 'c', .9, -5],
    ['book', 66, 7392, 170, 'c', .6, -5],
    ['music', 1684, 7392, 170, 'c', 1.4, 6],
    ['puddle', 1690, 8690, 210, 'cut', .3, 3],
];
foreach ($hm as [$n, $x, $y, $w, $kind, $d, $tilt]):
    [$src, $alt] = seo_mascot($n);
    if ($kind === 'cut') $src = str_replace('.jpg', '-cut.png', $src);
?>
<img class="hm hm--<?= $kind ?>" src="<?= $e($src) ?>" alt="<?= $e($alt) ?>" loading="lazy" style="--x:<?= $x ?>;--y:<?= $y ?>;--w:<?= $w ?>;--d:<?= $d ?>s;--t:<?= $tilt ?>deg">
<?php endforeach ?>