<header class="top">
  <div class="wrap">
    <a href="index.php"><?= $ph('logo', 'logo') ?></a>
    <nav>
<?php foreach ($c['nav'] as [$label, $h]): ?>
      <a<?= $h === ($current ?? '') ? ' class="on"' : '' ?> href="<?= $e($href($h)) ?>"><?= $e($label) ?></a>
<?php endforeach ?>
    </nav>
  </div>
</header>