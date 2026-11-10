<?php
// Breadcrumbs + "In short" answer box + four quick facts. Needs $seoKey (and $seoAll from seo.php).
$sp = $seoAll[$seoKey] ?? null;
if (!$sp) return;
$trail = $seoKey === 'home' ? [] : ($seoKey === 'about' ? [['Home', 'index.php'], ['About Us', null]] : [['Home', 'index.php'], ['Services', 'index.php#services'], [$seoLabel, null]]);
?>
<section class="sx-answer" aria-labelledby="sx-short">
  <div class="sx-wrap">
<?php if ($trail): ?>
    <nav class="sx-crumbs" aria-label="Breadcrumb"><ol>
<?php foreach ($trail as [$name, $href]): ?>
      <li><?php if ($href): ?><a href="<?= $e($href) ?>"><?= $e($name) ?></a><?php else: ?><span aria-current="page"><?= $e($name) ?></span><?php endif ?></li>
<?php endforeach ?>
    </ol></nav>
<?php endif ?>
    <div class="sx-answer__box sx-reveal">
      <?php [$am, $amAlt] = seo_pic($seoKey, 2); ?><img class="sx-answer__mascot" src="<?= $e($am) ?>" alt="<?= $e($amAlt) ?>" loading="lazy">
      <div class="sx-answer__main">
        <span class="sx-chip" id="sx-short">In short</span>
        <p><?= $e($sp['answer']) ?></p>
      </div>
      <dl class="sx-glance">
<?php foreach ($sp['glance'] as [$label, $value]): ?>
        <div><dt><?= $e($label) ?></dt><dd><?= $e($value) ?></dd></div>
<?php endforeach ?>
      </dl>
    </div>
  </div>
</section>