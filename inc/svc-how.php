<?php // "How it works": four steps joined by a dashed line. Needs $s. ?>
<section class="bk-how" id="how">
  <div class="bk-how__panel">
    <h2 class="sv-h sv-h--dark sv-h--center"><?php foreach ($s['how']['title'] as $n => $line): ?><span class="<?= $n === 0 ? 'sv-acc' : '' ?>"><?= $e($line) ?></span> <?php endforeach ?></h2>
    <p class="bk-how__lead"><?= $e($s['how']['intro']) ?></p>
    <div class="container-fluid ab-wrap">
      <div class="row bk-steps justify-content-center">
<?php foreach ($s['how']['steps'] as $i => [$name, $text]): ?>
        <div class="col-6 col-xl-3 bk-step ab-reveal" style="--i:<?= $i ?>">
          <div class="bk-step__dot"><span class="sv-step"><?= $i + 1 ?></span></div>
          <h3 class="sv-st"><?= $e($name) ?></h3>
          <hr>
          <p><?= $e($text) ?></p>
        </div>
<?php endforeach ?>
      </div>
    </div>
  </div>
</section>