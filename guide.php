<?php
// Long-form guide template. The slug in ?g= picks the words from content-articles.php; it renders at /<slug> after export.
require __DIR__ . '/inc/boot.php';
$all = require __DIR__ . '/content-articles.php';
$slug = $_GET['g'] ?? '';
if (!isset($all[$slug])) { http_response_code(404); exit('Guide not found'); }
$g = $all[$slug];
$title = $g['h1'];
$seoKey = 'guide-' . $slug;
$current = '';
$base = 'index.php';
$bootstrap = true;
$css = ['about.css', 'service.css'];
$js = ['about.js'];
$bn = ['title' => $g['h1'], 'sub' => $g['sub']];
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>

<?php include __DIR__ . '/inc/seo-answer.php' ?>

<article class="gd">
  <div class="sx-wrap gd__wrap">
    <p class="gd__meta">Updated <time datetime="<?= $e($g['updated']) ?>"><?= $e(date('F j, Y', strtotime($g['updated']))) ?></time> · By the Fablenest Publishers team</p>
<?php foreach ($g['sections'] as $sec): ?>
    <section class="gd__sec sx-reveal">
      <h2 class="sx-h2"><?= $e($sec['h']) ?></h2>
<?php foreach (($sec['p'] ?? []) as $p): ?>
      <p><?= $e($p) ?></p>
<?php endforeach ?>
<?php if (!empty($sec['table'])): $tbl = $sec['table']; ?>
      <div class="gd__tbl"><table>
        <thead><tr><?php foreach ($tbl['head'] as $h): ?><th><?= $e($h) ?></th><?php endforeach ?></tr></thead>
        <tbody>
<?php foreach ($tbl['rows'] as $row): ?>
          <tr><?php foreach ($row as $i => $cell): ?><?= $i ? '<td>' : '<th scope="row">' ?><?= $e($cell) ?><?= $i ? '</td>' : '</th>' ?><?php endforeach ?></tr>
<?php endforeach ?>
        </tbody>
      </table></div>
<?php endif ?>
<?php foreach (($sec['after'] ?? []) as $p): ?>
      <p><?= $e($p) ?></p>
<?php endforeach ?>
<?php if (!empty($sec['list'])): ?>
      <ul class="gd__list">
<?php foreach ($sec['list'] as $li): ?>
        <li><?= $e($li) ?></li>
<?php endforeach ?>
      </ul>
<?php endif ?>
<?php if (!empty($sec['note'])): ?>
      <p class="gd__note"><?= $e($sec['note']) ?></p>
<?php endif ?>
    </section>
<?php endforeach ?>
    <section class="gd__cta sx-reveal">
      <h2 class="sx-h2">Want a real number for <span class="sx-acc">your book?</span></h2>
      <p>Tell us the page count, style and goals, and we will send a stage-by-stage estimate with no obligation.</p>
      <a class="sx-btn" href="#contact">Request a quote</a>
    </section>
    <section class="gd__src">
      <h2 class="sx-h3">Sources</h2>
      <ul>
<?php foreach ($g['sources'] as [$name, $url]): ?>
        <li><a href="<?= $e($url) ?>" rel="noopener" target="_blank"><?= $e($name) ?></a></li>
<?php endforeach ?>
      </ul>
    </section>
  </div>
</article>

<?php include __DIR__ . '/inc/seo-faq.php' ?>

<section class="sx-rel" aria-labelledby="rel-h">
  <div class="sx-wrap">
    <h2 class="sx-h sx-h--sm" id="rel-h">Keep <span class="sx-acc">reading</span></h2>
    <div class="sx-rel__grid">
<?php foreach ($g['related'] as $i => [$name, $href]): ?>
      <a class="sx-card sx-reveal" style="--i:<?= $i ?>" href="<?= $e($href) ?>">
        <span class="sx-card__n"><?= sprintf('%02d', $i + 1) ?></span>
        <strong><?= $e($name) ?></strong>
        <em aria-hidden="true">→</em>
      </a>
<?php endforeach ?>
    </div>
  </div>
</section>

<div class="pg solo" style="height:calc(740*var(--u));margin-top:calc(147*var(--u))">
<?php include __DIR__ . '/inc/sec-contact.php' ?>
</div>

<div class="pg solo" style="margin-top:calc(80*var(--u))">
<?php include __DIR__ . '/inc/site-footer.php' ?>
</div>
</main>
<?php include __DIR__ . '/inc/scripts.php' ?>
</body>
</html>
