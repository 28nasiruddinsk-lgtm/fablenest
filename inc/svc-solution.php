<?php // "What is included": dark panel left, four numbered tiles right. Needs $s. ?>
<section class="bk-sol" id="solution">
  <div class="bk-sol__box container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-5 bk-sol__side ab-reveal">
        <h2 class="sv-h sv-h--dark"><?php foreach ($s['solution']['heading'] as $n => $line): ?><span class="<?= $n === $s['solution']['accent'] ? 'sv-acc' : '' ?>"><?= $e($line) ?></span> <?php endforeach ?></h2>
        <p><?= $e($s['solution']['text']) ?></p>
        <div class="bk-btns">
          <a class="bk-btn bk-btn--fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
          <a class="bk-btn bk-btn--line" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row g-0 h-100">
<?php foreach ($s['solution']['tiles'] as $i => [$name, $text]): ?>
          <div class="col-sm-6 bk-tile bk-tile--<?= ($i + intdiv($i, 2)) % 2 ? 'tint' : 'white' ?> ab-reveal" style="--i:<?= $i ?>">
            <span class="sv-num"><?= sprintf('%02d', $i + 1) ?></span>
            <h3 class="sv-t"><?= $e($name) ?></h3>
            <p><?= $e($text) ?></p>
          </div>
<?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>