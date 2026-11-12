<section class="sec" id="contact" style="--y0:8220;--h:740">
  <h2 class="a th rv rv-wipe" style="--x:170;--y:8252;--w:640;--h:168;--fs:76">Let&rsquo;s <em>Bring Your</em><br>Story to Life</h2>
  <p class="a t20 rv-lines stag" style="--x:177;--y:8424;--w:620;--h:140;--d:.4"><?= $br($c['contact']['lines']) ?></p>
<?php foreach ([['phone', 8620], ['email', 8712], ['address', 8807]] as $i => [$k, $y]): ?>
  <div class="a crow rv rv-l" style="--x:175;--y:<?= $y ?>;--w:420;--h:60;--d:<?= .6 + $i * .15 ?>"><img class="mul" src="assets/s/c<?= $i + 1 ?>.png" alt=""><span><?= $e($c['contact'][$k]) ?></span></div>
<?php endforeach ?>
  <img class="a mul rv rv-r" style="--x:880;--y:8220;--w:880;--h:740;--d:.3" src="assets/s/paper.png" alt="" decoding="async" loading="lazy">
  <form action="submit.php" method="post" autocomplete="off" data-form>
    <input type="hidden" name="form" value="contact"><input class="hp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
    <input class="a pf rv" style="--x:969;--y:8331;--w:684;--h:67;--d:1" type="text" name="name" placeholder="Name" aria-label="Name" required>
    <input class="a pf rv" style="--x:969;--y:8421;--w:684;--h:66;--d:1.1" type="email" name="email" placeholder="Email" aria-label="Email" required>
    <input class="a pf rv" style="--x:969;--y:8510;--w:684;--h:65;--d:1.2" type="tel" name="phone" placeholder="Phone" aria-label="Phone">
    <textarea class="a pf rv" style="--x:969;--y:8600;--w:684;--h:150;--d:1.3;padding-top:calc(20*var(--u))" name="message" placeholder="Message" aria-label="Message"></textarea>
    <button class="a pbtn rv rv-pop" style="--x:968;--y:8773;--w:686;--h:71;--d:1.45" type="submit"><?= $e($c['contact']['button']) ?></button>
  </form>
</section>
