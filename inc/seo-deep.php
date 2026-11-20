<?php
// Long-form home page content (words in content-deep.php), styled like the guide articles.
$deep = require __DIR__ . '/../content-deep.php';
?>
<article class="gd" aria-label="About children’s book publishing">
  <div class="sx-wrap gd__wrap">
<?php foreach ($deep as $sec): ?>
    <section class="gd__sec sx-reveal">
      <h2 class="sx-h2"><?= $e($sec['h']) ?></h2>
<?php foreach (($sec['p'] ?? []) as $p): ?>
      <p><?= $e($p) ?></p>
<?php endforeach ?>
<?php if (!empty($sec['list'])): ?>
      <ul class="gd__list">
<?php foreach ($sec['list'] as $li): ?>
        <li><?= $e($li) ?></li>
<?php endforeach ?>
      </ul>
<?php endif ?>
<?php if (!empty($sec['links'])): ?>
      <p class="gd__more"><?php foreach ($sec['links'] as $n => [$t, $h]): ?><?= $n ? ' · ' : '' ?><a href="<?= $e($h) ?>"><?= $e($t) ?></a><?php endforeach ?></p>
<?php endif ?>
    </section>
<?php endforeach ?>
  </div>
</article>
