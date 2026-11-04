<?php
// About Us page, wireframe. Header, footer and the repeated sections live in inc/.
require __DIR__ . '/inc/boot.php';
$a = $c['about_page'];
$title = $a['title'];
$current = 'about.php';
$bootstrap = true;
$css = ['about.css'];
$base = 'index.php';
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>
<div class="wf">



<?php include __DIR__ . '/inc/logos.php' ?>

<section class="ws" data-label="intro: text + picture">
  <div class="wrap wtwo">
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