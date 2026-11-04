<?php
// About Us page, wireframe. Header, footer and the repeated sections live in inc/.
require __DIR__ . '/inc/boot.php';
$a = $c['about_page'];
$title = $a['title'];
$current = 'about.php';
$bootstrap = true;
$css = ['about.css'];
$js = ['about.js'];
$base = 'index.php';
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>

<?php include __DIR__ . '/inc/logos.php' ?>

<?php include __DIR__ . '/inc/about-intro.php' ?>

<div class="wf">
<?php include __DIR__ . '/inc/cta.php' ?>

<section class="ws band" data-label="4 cards">
  <div class="wrap wcenter">
    <h2><?= $e($a['difference']['title']) ?></h2>
    <p class="wlead"><?= $e($a['difference']['intro']) ?></p>
    <div class="cards">
<?php foreach ($a['difference']['cards'] as [$title, $text]): ?>
      <div class="wcard sk"><?= $ph('icon') ?><h3><?= $e($title) ?></h3><hr><p><?= $e($text) ?></p></div>
<?php endforeach ?>
    </div>
  </div>
</section>

<section class="ws" data-label="vision: picture + text">
  <div class="wrap wtwo">
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
</div>

<div class="pg solo">
<?php include __DIR__ . '/inc/site-footer.php' ?>
</div>
</main>
<?php include __DIR__ . '/inc/scripts.php' ?>
</body>
</html>