<?php
// Long-form page content (words in content-deep.php), styled like the guide articles. On phones each block is a closed accordion row so the page stays short.
$deep = (require __DIR__ . '/../content-deep.php')[$seoKey] ?? [];
if (!$deep) return;
?>
<article class="gd" aria-label="About children’s book publishing">
  <div class="sx-wrap gd__wrap">
<?php foreach ($deep as $sec): ?>
    <section class="gd__sec sx-reveal">
      <details class="gd__acc" open>
        <summary><h2 class="sx-h2"><?= $e($sec['h']) ?></h2></summary>
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
      </details>
    </section>
<?php endforeach ?>
  </div>
</article>
<script>if (matchMedia('(max-width:980px)').matches) document.querySelectorAll('.gd__acc').forEach((d, i) => { d.open = false })</script>
