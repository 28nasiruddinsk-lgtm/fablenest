<?php // Book Publishing intro: text left, picture right (same layout as the About Us intro). ?>
<section class="ab-intro" id="intro">
  <div class="container-fluid ab-wrap">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 ab-reveal">
        <h2 class="ab-h mb-4"><img src="assets/s/bk_h_intro.jpg" alt="<?= $e(implode(' ', $b['intro']['heading'])) ?>"></h2>
<?php foreach ($b['intro']['paragraphs'] as $t): ?>
        <p class="ab-p"><?= $e($t) ?></p>
<?php endforeach ?>
      </div>
      <div class="col-lg-5 ab-reveal ab-reveal--late">
        <?php if (!empty($b['intro']['image'])): ?>
        <img class="ab-pic" src="<?= $e($b['intro']['image']) ?>" alt="">
        <?php else: ?>
        <div class="ab-pic ab-pic--empty"><img src="assets/mascot.png" alt=""></div>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>