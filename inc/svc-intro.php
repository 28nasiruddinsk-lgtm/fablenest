<?php // Service intro: heading and text left, picture right (Bootstrap grid). Needs $s (one service's data). ?>
<section class="ab-intro" id="intro">
  <div class="container-fluid ab-wrap">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 ab-reveal">
        <h2 class="sv-h mb-4"><?php foreach ($s['intro']['heading'] as $n => $line): ?><span class="<?= $n === $s['intro']['accent'] ? 'sv-acc' : '' ?>"><?= $e($line) ?></span> <?php endforeach ?></h2>
<?php foreach ($s['intro']['paragraphs'] as $t): ?>
        <p class="ab-p"><?= $e($t) ?></p>
<?php endforeach ?>
      </div>
      <div class="col-lg-5 ab-reveal ab-reveal--late">
        <?php [$pic, $picAlt] = seo_pic($seoKey, 0); ?><img class="ab-pic ab-pic--mascot" src="<?= $e(seo_cut($pic)) ?>" alt="<?= $e($picAlt) ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>