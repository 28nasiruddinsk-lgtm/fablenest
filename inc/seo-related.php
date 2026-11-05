<?php
// Other services: internal links that help visitors and search engines move around the site.
$cur = $seoLabel ?? '';
$rel = array_values(array_filter($c['mega']['items'], fn($m) => strcasecmp($m[0], $cur) !== 0));
$rel = array_slice($rel, 0, 4);
?>
<section class="sx-rel" aria-labelledby="rel-h">
  <div class="sx-wrap">
    <h2 class="sx-h sx-h--sm" id="rel-h">More ways we can <span class="sx-acc">help</span></h2>
    <div class="sx-rel__grid">
<?php foreach ($rel as $i => [$name, $line]): ?>
      <a class="sx-card sx-reveal" style="--i:<?= $i ?>" href="<?= $e($c['service_pages'][$name] ?? 'index.php#services') ?>">
        <span class="sx-card__n"><?= sprintf('%02d', $i + 1) ?></span>
        <strong><?= $e($name) ?></strong>
        <span><?= $e($line) ?></span>
        <em aria-hidden="true">→</em>
      </a>
<?php endforeach ?>
    </div>
  </div>
</section>