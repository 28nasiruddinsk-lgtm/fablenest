<section class="sec" id="cta" style="--y0:2150;--h:330">
  <div class="a cta-bar rv rv-up" style="--x:26;--y:2181;--w:1868;--h:268"></div>
  <h2 class="a cta-h rv" style="--x:162;--y:2244;--w:700;--h:48;--d:.45"><?= $e($c['cta']['title']) ?></h2>
  <p class="a t20 rv-lines stag" style="--x:162;--y:2308;--w:640;--h:84;--d:.6"><?= $br($c['cta']['lines']) ?></p>
  <form action="submit.php" method="post" autocomplete="off" data-form>
    <input type="hidden" name="form" value="cta"><input class="hp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
    <input class="a fld" style="--x:888;--y:2232;--w:404;--h:42;--d:.7" type="text" name="name" placeholder="Your Name" aria-label="Your name" required>
    <input class="a fld" style="--x:1335;--y:2232;--w:404;--h:42;--d:.85" type="tel" name="phone" placeholder="Phone Number" aria-label="Phone number">
    <input class="a fld" style="--x:888;--y:2338;--w:574;--h:42;--d:1" type="text" name="message" placeholder="Tell Us About Your Book" aria-label="About your book">
    <button class="a cta-btn rv rv-pop" style="--x:1520;--y:2331;--w:219;--h:60;--d:1.15" type="submit"><?= $e($c['cta']['button']) ?></button>
  </form>
</section>
