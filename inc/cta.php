<section class="ws" data-label="CTA bar">
  <div class="wrap cta sk">
    <div>
      <h2><?= $e($c['cta']['title']) ?></h2>
      <p><?= $e(implode(' ', $c['cta']['lines'])) ?></p>
    </div>
    <form action="submit.php" method="post" autocomplete="off">
      <input type="hidden" name="form" value="cta"><input type="text" name="website" tabindex="-1" autocomplete="off" hidden>
      <input class="field" name="name" placeholder="Your Name" required>
      <input class="field" name="phone" type="tel" placeholder="Phone Number">
      <input class="field" name="message" placeholder="Tell Us About Your Book">
      <button class="wbtn fill" type="submit"><?= $e($c['cta']['button']) ?></button>
    </form>
  </div>
  <span class="note" style="right:70px;top:6px">same bar on every page</span>
</section>