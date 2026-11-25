<?php // Imagination banner (chick writing in a notebook): art with the heading + real paragraph and buttons on top. Shared by every page. ?>
<section class="bk-img" id="imagination">
  <div class="bk-img__box">
    <img class="bk-img__art" src="assets/s/bk-imag2.webp" alt="A chick in a denim jacket lies on the grass writing in a notebook among colourful plants" loading="lazy">
    <h2 class="bk-img__h"><span>Imagination Deserves to</span><b>Be Seen</b></h2>
    <p class="bk-img__p"><?= $e(implode(' ', $c['imagination']['lines'])) ?></p>
    <a class="bk-img__btn bk-btn bk-btn--dark" style="left:31.5%;width:11.9%" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
    <a class="bk-img__btn bk-btn bk-btn--ink" style="left:44.1%;width:10.16%" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
  </div>
</section>