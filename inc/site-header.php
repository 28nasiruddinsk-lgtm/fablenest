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
  <a class="logo" href="#top"><img src="assets/logo.png" alt="<?= $e($c['logo']) ?>"></a>
  <button class="burger" id="burger" aria-label="Menu" aria-expanded="false"><span></span><span></span></button>
  <ul class="links" id="links">
<?php foreach ($c['nav'] as [$label, $href, $x]): ?>
    <li><a<?= $href === $current ? ' class="active"' : '' ?> href="<?= $e($link($href)) ?>" style="--x:<?= (int)$x ?>"><?= $e($label) ?></a></li>
<?php endforeach ?>
  </ul>
</nav>

<div class="roots" aria-hidden="true"><svg viewBox="0 0 1920 72"></svg></div>
