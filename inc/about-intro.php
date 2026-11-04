<?php // About Us intro: Bootstrap grid for the two columns, about.css for the look. ?>
<section class="ab-intro" id="story">
  <div class="container-fluid ab-wrap">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 ab-reveal">
        <h2 class="ab-h mb-4"><img src="assets/s/h_intro.jpg" alt="<?= $e(implode(' ', $a['intro']['heading'])) ?>"></h2>
<?php foreach ($a['intro']['paragraphs'] as $t): ?>
        <p class="ab-p"><?= $e($t) ?></p>
<?php endforeach ?>
      </div>
      <div class="col-lg-5 ab-reveal ab-reveal--late">
        <?php if (!empty($a['intro']['image'])): ?>
        <img class="ab-pic" src="<?= $e($a['intro']['image']) ?>" alt="">
        <?php else: ?>
        <div class="ab-pic ab-pic--empty"><img src="assets/mascot.png" alt=""></div>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>