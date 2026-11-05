<?php // "Our Publishing Solution": dark panel left, four tiles right. ?>
<section class="bk-sol" id="solution">
  <div class="bk-sol__box container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-5 bk-sol__side ab-reveal">
        <h2 class="bk-sol__h"><img src="assets/s/bk_h_sol.png" alt="Our Publishing Solution"></h2>
        <p><?= $e($b['solution']['text']) ?></p>
        <div class="bk-btns">
          <a class="bk-btn bk-btn--fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
          <a class="bk-btn bk-btn--line" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row g-0 h-100">
<?php foreach ($b['solution']['tiles'] as $i => [$name, $text, $icon, $titleImg]): ?>
          <div class="col-sm-6 bk-tile bk-tile--<?= ($i + intdiv($i, 2)) % 2 ? 'tint' : 'white' ?> ab-reveal" style="--i:<?= $i ?>">
            <img class="bk-tile__icon" src="<?= $e($icon) ?>" alt="" loading="lazy">
            <h3 class="bk-tile__t"><img src="<?= $e($titleImg) ?>" alt="<?= $e($name) ?>" loading="lazy"></h3>
            <p><?= $e($text) ?></p>
          </div>
<?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>