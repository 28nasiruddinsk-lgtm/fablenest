<?php
// Original site header (white bar + roots). $base is the page that owns the #sections; $current marks the active link.
$base = $base ?? '';
$current = $current ?? '#top';
$link = fn($h) => str_starts_with($h, '#') ? $base . $h : $h;
// joins lines with <br> (an empty line becomes a blank one); the footer text uses it
$br ??= fn(array $lines) => implode('<br>', array_map(fn($l) => $l === '' ? '&nbsp;' : htmlspecialchars($l, ENT_NOQUOTES, 'UTF-8'), $lines));
?>
<nav class="nav" aria-label="Main">
  <span class="nav-bar"></span>
  <a class="logo" href="#top" aria-label="<?= $e($c['logo']) ?>"><img class="logo__still" src="assets/logo.png" alt="<?= $e($c['logo']) ?>"><span class="logo__a" aria-hidden="true" data-src="assets/logo-anim.json?v=<?= filemtime(dirname(__DIR__) . '/assets/logo-anim.json') ?>"></span></a>
  <button class="burger" id="burger" aria-label="Menu" aria-expanded="false"><span></span><span></span></button>
  <ul class="links" id="links">
<?php foreach ($c['nav'] as [$label, $href, $x]): ?>
<?php $mega = $href === '#services'; ?>
    <li<?= $mega ? ' class="has-mega"' : '' ?>><a<?= $href === $current ? ' class="active"' : '' ?> href="<?= $e($link($href)) ?>" style="--x:<?= (int)$x ?>"<?= $mega ? ' aria-haspopup="true" aria-expanded="false"' : '' ?>><?= $e($label) ?></a>
<?php if ($mega): ?>
      <div class="mega" id="mega">
        <div class="mega__intro">
          <strong><?= $e($c['mega']['intro'][0]) ?></strong>
          <p><?= $e($c['mega']['intro'][1]) ?></p>
          <a class="mega__all" href="<?= $e($link('#services')) ?>">All services <span aria-hidden="true">→</span></a>
        </div>
        <ul class="mega__grid">
<?php foreach ($c['mega']['items'] as $n => [$name, $line]): $page = $c['service_pages'][$name] ?? null; ?>
          <li><a href="<?= $e($page ?? $link('#services')) ?>"<?= $page ? '' : ' class="soon"' ?>>
            <span class="mega__n"><?= sprintf('%02d', $n + 1) ?></span>
            <span class="mega__t"><?= $e($name) ?><?= $page ? '' : ' <em>soon</em>' ?></span>
            <span class="mega__d"><?= $e($line) ?></span>
          </a></li>
<?php endforeach ?>
        </ul>
      </div>
<?php endif ?>
    </li>
<?php endforeach ?>
  </ul>
</nav>

<div class="roots" aria-hidden="true"><svg viewBox="0 0 1920 72"></svg></div>
