<?php // "How Publishing Works": four steps joined by a dashed line. ?>
<section class="bk-how" id="how">
  <div class="bk-how__panel">
    <h2 class="bk-how__h"><img src="assets/s/bk_h_how.png" alt="How Publishing Works"></h2>
    <p class="bk-how__lead"><?= $e($b['how']['intro']) ?></p>
    <div class="container-fluid ab-wrap">
      <div class="row bk-steps justify-content-center">
<?php foreach ($b['how']['steps'] as $i => [$name, $text, $titleImg]): ?>
        <div class="col-6 col-xl-3 bk-step ab-reveal" style="--i:<?= $i ?>">
          <div class="bk-step__dot"><span></span></div>
          <h3 class="bk-step__t"><img src="<?= $e($titleImg) ?>" alt="<?= $e($name) ?>" loading="lazy"></h3>
          <hr>
          <p><?= $e($text) ?></p>
        </div>
<?php endforeach ?>
      </div>
    </div>
  </div>
</section>