<section class="ws band" id="contact" data-label="contact">
  <div class="wrap wtwo" style="align-items:start">
    <div>
      <h2>Let's Bring Your <span>Story to Life</span></h2>
      <p><?= $e(implode(' ', $c['contact']['lines'])) ?></p>
      <div class="rows">
<?php foreach (['phone', 'email', 'address'] as $k): ?>
        <div><?= $ph('') ?><span><?= $e($c['contact'][$k]) ?></span></div>
<?php endforeach ?>
      </div>
    </div>
    <form class="wpaper sk2" action="submit.php" method="post" autocomplete="off">
      <input type="hidden" name="form" value="contact"><input type="text" name="website" tabindex="-1" autocomplete="off" hidden>
      <input class="box" name="name" placeholder="Name" required>
      <input class="box" name="email" type="email" placeholder="Email" required>
      <input class="box" name="phone" type="tel" placeholder="Phone">
      <textarea class="box" name="message" placeholder="Message"></textarea>
      <button class="wbtn fill" type="submit"><?= $e($c['contact']['button']) ?></button>
    </form>
  </div>
</section>