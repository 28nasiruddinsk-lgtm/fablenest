<section class="sec" id="stories" style="--y0:7345;--h:728">
  <img class="a rv" style="--x:18;--y:7345;--w:1884;--h:728" src="assets/s/author.jpg" alt="" decoding="async" loading="lazy">
  <h2 class="a th th--dark th--c rv rv-pop" style="--x:560;--y:7412;--w:800;--h:80;--d:.2;--fs:76">Author <em>Stories</em></h2>
  <p class="a t20 c rv" style="--x:0;--y:7489;--w:1920;--h:28;--d:.45;color:#fff"><?= $e($c['stories']['intro']) ?></p>
<?php foreach ($stories as $i => $s): ?>
  <div class="a tst" style="--x:0;--y:7345;--w:1920;--h:728;--dir:1;pointer-events:none"<?= $i ? ' hidden' : '' ?>>
    <div class="a av" style="--x:888;--y:7601;--w:144;--h:146"><img src="<?= $e($s['photo']) ?>" alt="<?= $e($s['name']) ?>"></div>
    <p class="a nm" style="--x:560;--y:7765;--w:800;--h:36"><?= $e($s['name']) ?></p>
    <p class="a t20 c q" style="--x:360;--y:7821;--w:1200;--h:84"><?= $br($s['text']) ?></p>
    <p class="a stars" style="--x:760;--y:7937;--w:400;--h:40" aria-label="<?= (int)$s['stars'] ?> out of 5 stars"><?= str_repeat('★', (int)$s['stars']) ?></p>
  </div>
<?php endforeach ?>
<?php if (count($stories) > 1): ?>
  <button class="a arr rv rv-l" id="tprev" style="--x:160;--y:7789;--w:65;--h:65;--d:.7" aria-label="Previous story"><svg viewBox="0 0 24 24" fill="none" stroke="#002a1c" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12H4M10 6l-6 6 6 6"/></svg></button>
  <button class="a arr rv rv-r" id="tnext" style="--x:1693;--y:7789;--w:65;--h:65;--d:.7" aria-label="Next story"><svg viewBox="0 0 24 24" fill="none" stroke="#002a1c" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16M14 6l6 6-6 6"/></svg></button>
<?php endif ?>
</section>
