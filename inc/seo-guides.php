<?php
// Links to the long-form guides from the main pages, so search engines and readers can find them.
$glist = require __DIR__ . '/../content-articles.php';
?>
<section class="sx-rel" aria-labelledby="gl-h">
  <div class="sx-wrap">
    <h2 class="sx-h sx-h--sm" id="gl-h">Free children&rsquo;s book <span class="sx-acc">publishing guides</span></h2>
    <div class="sx-rel__grid">
<?php $i = 0; foreach ($glist as $slug => $g): ?>
      <a class="sx-card sx-reveal" style="--i:<?= $i ?>" href="guide.php?g=<?= $e($slug) ?>">
        <span class="sx-card__n"><?= sprintf('%02d', ++$i) ?></span>
        <strong><?= $e($g['name']) ?></strong>
        <span><?= $e($g['sub']) ?></span>
        <em aria-hidden="true">→</em>
      </a>
<?php endforeach ?>
    </div>
  </div>
</section>
