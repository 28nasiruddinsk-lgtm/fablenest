<?php // About Us banner: Bootstrap grid and utility classes for layout, about.css for the look. ?>
<section class="ab-banner position-relative overflow-hidden text-center text-white d-flex align-items-center" id="top">
  <div class="container position-relative py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <h1 class="ab-title mb-3"><img src="assets/s/h_about.png" alt="<?= $e($a['title']) ?>"></h1>
        <p class="ab-sub mx-auto"><?= $e($a['subtitle']) ?></p>
        <div class="ab-actions d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a class="ab-btn ab-btn--fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
          <a class="ab-btn ab-btn--line" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
        </div>
      </div>
    </div>
  </div>
</section>