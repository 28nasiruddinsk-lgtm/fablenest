<?php
// Long-form page content (words in content-deep.php). First block = intro, the rest = numbered cards. On phones the cards are closed accordion rows.
$deep = (require __DIR__ . '/../content-deep.php')[$seoKey] ?? [];
if (!$deep) return;
$lead = array_shift($deep);
$body = function (array $s) use ($e) {
    foreach (($s['p'] ?? []) as $p) echo '<p>', $e($p), "</p>\n";
    if (!empty($s['list'])) { echo '<ul>'; foreach ($s['list'] as $li) echo '<li>', $e($li), '</li>'; echo "</ul>\n"; }
    if (!empty($s['links'])) { echo '<p class="gd__more">'; foreach ($s['links'] as $n => [$t, $h]) echo $n ? ' · ' : '', '<a href="', $e($h), '">', $e($t), '</a>'; echo "</p>\n"; }
};
?>
<section class="sx-deep" aria-label="About children’s book publishing">
  <div class="sx-wrap">
    <header class="sx-deep__lead sx-reveal">
      <h2 class="sx-h"><?= $e($lead['h']) ?></h2>
      <div class="sx-deep__txt"><?php $body($lead) ?></div>
    </header>
    <div class="sx-deep__grid">
<?php foreach ($deep as $i => $sec): ?>
      <details class="gd__acc sx-deep__card sx-reveal" open>
        <summary><span class="sx-deep__n"><?= sprintf('%02d', $i + 1) ?></span><h3 class="sx-deep__h"><?= $e($sec['h']) ?></h3></summary>
        <div class="sx-deep__txt"><?php $body($sec) ?></div>
      </details>
<?php endforeach ?>
    </div>
  </div>
</section>
<script>if (matchMedia('(max-width:980px)').matches) document.querySelectorAll('.gd__acc').forEach(function (d) { d.open = false })</script>
