<?php // Page banner: Bootstrap grid and utility classes for layout, about.css for the look. Needs $bn = [title, sub, img]. ?>
<section class="ab-banner position-relative overflow-hidden text-center text-white d-flex align-items-center" id="top">
  <div class="container position-relative py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <h1 class="ab-title mb-3"<?= isset($bn['w']) ? ' style="--tw:' . $e($bn['w']) . '"' : '' ?>><img src="<?= $e($bn['img']) ?>" alt="<?= $e($bn['title']) ?>"></h1>
        <p class="ab-sub mx-auto"<?= isset($bn['sw']) ? ' style="max-width:' . $e($bn['sw']) . '"' : '' ?>><?= $e($bn['sub']) ?></p>
        <div class="ab-actions d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a class="ab-btn ab-btn--fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
          <a class="ab-btn ab-btn--line" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
        </div>
      </div>
    </div>
  </div>
</section>