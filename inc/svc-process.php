<?php
// Illustration process: one scene shown in four stages (idea -> sketch -> line art -> final). Needs $s['process'].
$pr = $s['process'];
?>
<section class="pr" id="process" data-process data-stage="1" aria-labelledby="pr-h">
  <div class="pr__panel">
    <div class="container-fluid ab-wrap">
      <div class="row align-items-center g-5">
        <div class="col-lg-5 ab-reveal">
          <h2 class="sv-h pr__h" id="pr-h"><?php foreach (tc_lines($pr['title']) as $n => $line): ?><span class="<?= $n === 0 ? 'sv-acc' : '' ?>"><?= $e($line) ?></span> <?php endforeach ?></h2>
          <p class="pr__lead"><?= $e($pr['intro']) ?></p>
          <ol class="pr__steps">
<?php foreach ($pr['steps'] as $i => [$name, $text, $tag]): ?>
            <li class="pr__step<?= $i === 0 ? ' is-on' : '' ?>" data-step="<?= $i + 1 ?>">
              <button type="button" aria-label="Show step <?= $i + 1 ?>: <?= $e($name) ?>">
                <span class="pr__num"><?= $i + 1 ?></span>
                <span class="pr__txt"><strong><?= $e(tc($name)) ?></strong><small><?= $e($text) ?></small></span>
                <em class="pr__tag"><?= $e($tag) ?></em>
              </button>
            </li>
<?php endforeach ?>
          </ol>
          <button type="button" class="pr__replay" hidden>Watch it again</button>
        </div>
        <div class="col-lg-7 ab-reveal ab-reveal--late">
          <div class="pr__stage">
            <span class="pr__tape pr__tape--l" aria-hidden="true"></span><span class="pr__tape pr__tape--r" aria-hidden="true"></span>
            <div class="pr__pic" role="img" aria-label="A scene shown as a hand-drawn idea, a sketch, line art and the finished illustration">
              <img class="pr__img pr__img--1" src="assets/s/ill-1.jpg" alt="" loading="lazy" decoding="async">
              <img class="pr__img pr__img--2" src="assets/s/ill-2.jpg" alt="" loading="lazy" decoding="async">
              <img class="pr__img pr__img--3" src="assets/s/ill-3.jpg" alt="" loading="lazy" decoding="async">
              <img class="pr__img pr__img--4" src="assets/s/ill-4.jpg" alt="" loading="lazy" decoding="async">
            </div>
            <div class="pr__badge" aria-live="polite"><span class="pr__badge-n">1</span><span class="pr__badge-t"><?= $e($pr['steps'][0][2]) ?></span></div>
            <div class="pr__bar" aria-hidden="true"><i></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
