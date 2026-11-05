<section class="sec ft" id="footer" style="--y0:9040;--h:692">
  <div class="a" style="--x:0;--y:9040;--w:1920;--h:692;background:#002a1c"></div>
  <img class="a rv" style="--x:21;--y:9043;--w:1878;--h:669" src="assets/s/footer.jpg" alt="" decoding="async" loading="lazy">
  <h2 class="a lit rv rv-pop" style="--x:150;--y:9142;--w:560;--h:152;--d:.2"><img src="assets/s/h_footer.png" alt="Bringing Stories to Life."></h2>
  <p class="a t20 rv-lines stag" style="--x:160;--y:9322;--w:520;--h:120;--d:.5"><?= $br($c['footer']['lines']) ?></p>
  <form class="a pill rv" action="submit.php" method="post" style="--x:160;--y:9477;--w:418;--h:72;--d:.8" data-form>
    <input type="hidden" name="form" value="newsletter"><input class="hp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
    <input type="email" name="email" placeholder="Email Address" aria-label="Email address" required><button type="submit">Submit</button>
  </form>
  <nav class="a rv" style="--x:782;--y:9127;--w:230;--h:440;--d:.4" aria-label="Quick links"><h3>Quick Links</h3>
    <ul><?php foreach ($c['footer']['quick'] as [$label, $href]): ?><li><a href="<?= $e($link($href)) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul></nav>
  <nav class="a rv" style="--x:1158;--y:9127;--w:300;--h:440;--d:.55" aria-label="Services"><h3>Services</h3>
    <ul><?php foreach ($c['footer']['services'] as $label): ?><li><a href="<?= $e($c['service_pages'][$label] ?? $link('#services')) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul></nav>
  <h3 class="a rv ft-h" style="--x:1614;--y:9117;--w:260;--h:36;--d:.7">Contact Us</h3>
<?php foreach ([['phone', 9192], ['email', 9246], ['address', 9301]] as $i => [$k, $y]): ?>
  <a class="ft-row rv" style="--x:1610;--y:<?= $y ?>;--d:<?= .8 + $i * .1 ?>" href="<?= $e($link('#contact')) ?>"><img src="assets/s/f<?= $i + 1 ?>.png" alt=""><?= $e($c['contact'][$k]) ?></a>
<?php endforeach ?>
  <h3 class="a rv ft-h" style="--x:1614;--y:9364;--w:300;--h:36;--d:1.05">Social platforms</h3>
<?php foreach ($c['footer']['social'] as $i => [$label, $href]): ?>
  <a class="ft-row rv" style="--x:1610;--y:<?= 9440 + $i * 55 ?>;--d:<?= 1.1 + $i * .1 ?>" href="<?= $e($href) ?>"><img src="assets/s/f<?= $i + 4 ?>.png" alt=""><?= $e($label) ?></a>
<?php endforeach ?>
  <p class="a t20 c rv" style="--x:0;--y:9655;--w:1920;--h:28;--d:1.2"><?= $e($c['footer']['copyright']) ?></p>
</section>
