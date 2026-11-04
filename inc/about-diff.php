<?php // "The Difference We Bring": dark panel with four cards (Bootstrap grid, custom look). ?>
<section class="ab-diff" id="difference">
  <div class="ab-diff__panel">
    <h2 class="ab-diff__h"><img src="assets/s/h_diff.png" alt="<?= $e($a['difference']['title']) ?>"></h2>
    <p class="ab-diff__lead"><?= $e($a['difference']['intro']) ?></p>
    <div class="container-fluid ab-wrap">
      <div class="row g-4 justify-content-center">
<?php foreach ($a['difference']['cards'] as $i => [$name, $text, $icon, $titleImg]): ?>
        <div class="col-sm-6 col-xl-3 ab-reveal" style="--i:<?= $i ?>">
          <article class="ab-card">
            <img class="ab-card__icon" src="<?= $e($icon) ?>" alt="" loading="lazy">
            <h3 class="ab-card__title"><img src="<?= $e($titleImg) ?>" alt="<?= $e($name) ?>" loading="lazy"></h3>
            <hr>
            <p><?= $e($text) ?></p>
          </article>
        </div>
<?php endforeach ?>
      </div>
    </div>
  </div>
</section>