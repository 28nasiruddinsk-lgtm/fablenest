<?php
// About Us page, wireframe. Header, footer and the repeated sections live in inc/.
require __DIR__ . '/inc/boot.php';
$a = $c['about_page'];
$title = $a['title'];
$current = 'about.php';
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/header.php';
?>

<section class="sec hero center band" data-label="hero">
  <div class="wrap">
    <h1><?= $e($a['title']) ?></h1>
    <p><?= $e($a['subtitle']) ?></p>
    <div class="btns"><a class="btn fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a><a class="btn" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a></div>
  </div>
</section>

<?php include __DIR__ . '/inc/brands.php' ?>

<section class="sec" data-label="intro: text + picture">
  <div class="wrap two">
    <div>
      <h2><?php foreach ($a['intro']['heading'] as $l): ?><span><?= $e($l) ?></span><?php endforeach ?></h2>
<?php foreach ($a['intro']['paragraphs'] as $t): ?>
      <p><?= $e($t) ?></p>
<?php endforeach ?>
    </div>
    <?= $ph('picture', 'r43') ?>
  </div>
  <span class="note" style="right:90px;top:70px">picture not in the design yet</span>
</section>

<?php include __DIR__ . '/inc/cta.php' ?>

<section class="sec band" data-label="4 cards">
  <div class="wrap center">
    <h2><?= $e($a['difference']['title']) ?></h2>
    <p class="lead"><?= $e($a['difference']['intro']) ?></p>
    <div class="cards">
<?php foreach ($a['difference']['cards'] as [$title, $text]): ?>
      <div class="card sk"><?= $ph('icon') ?><h3><?= $e($title) ?></h3><hr><p><?= $e($text) ?></p></div>
<?php endforeach ?>
    </div>
  </div>
</section>

<section class="sec" data-label="vision: picture + text">
  <div class="wrap two">
    <?= $ph('picture', 'r43') ?>
    <div>
      <h2><?php foreach ($a['vision']['heading'] as $l): ?><span><?= $e($l) ?></span><?php endforeach ?></h2>
<?php foreach ($a['vision']['paragraphs'] as $t): ?>
      <p><?= $e($t) ?></p>
<?php endforeach ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/inc/imagination.php' ?>
<?php include __DIR__ . '/inc/stories.php' ?>
<?php include __DIR__ . '/inc/contact.php' ?>
<?php include __DIR__ . '/inc/footer.php' ?>