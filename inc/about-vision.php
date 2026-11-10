<?php // "Your Vision Guides Every Step": picture left, text right. ?>
<section class="ab-vision" id="vision">
  <div class="container-fluid ab-wrap">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 ab-reveal">
        <?php if (!empty($a['vision']['image'])): ?>
        <img class="ab-pic" src="<?= $e($a['vision']['image']) ?>" alt="">
        <?php else: ?>
        <?php [$pic, $picAlt] = seo_pic($seoKey, 1); ?><img class="ab-pic ab-pic--mascot" src="<?= $e($pic) ?>" alt="<?= $e($picAlt) ?>" loading="lazy">
        <?php endif ?>
      </div>
      <div class="col-lg-6 ab-reveal ab-reveal--late">
        <h2 class="ab-h mb-4"><img src="assets/s/h_vision.jpg" alt="<?= $e(implode(' ', $a['vision']['heading'])) ?>"></h2>
<?php foreach ($a['vision']['paragraphs'] as $t): ?>
        <p class="ab-p"><?= $e($t) ?></p>
<?php endforeach ?>
      </div>
    </div>
  </div>
</section>