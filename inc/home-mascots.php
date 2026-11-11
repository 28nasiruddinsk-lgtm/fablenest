<?php
// One extra mascot on the home page, a cut-out that interacts with a section edge:
// the chick on the book arrives at the call-to-action bar.
// [name, x, y, width, tilt degrees]  (page coordinates of the 1920 px design)
$hm = [
    ['flying', 1500, 2020, 270, -4],
];
foreach ($hm as [$n, $x, $y, $w, $tilt]):
    [$src, $alt] = seo_mascot($n);
?>
<img class="hm hm--cut" src="<?= $e(seo_cut($src)) ?>" alt="<?= $e($alt) ?>" loading="lazy" style="--x:<?= $x ?>;--y:<?= $y ?>;--w:<?= $w ?>;--t:<?= $tilt ?>deg">
<?php endforeach ?>