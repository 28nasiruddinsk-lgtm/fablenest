<footer class="foot" data-label="footer">
  <div class="wrap">
    <div class="cols">
      <div>
        <h2>Bringing Stories to Life.</h2>
        <p><?= $e(implode(' ', $c['footer']['lines'])) ?></p>
        <form class="mail sk" action="submit.php" method="post">
          <input type="hidden" name="form" value="newsletter">
          <input type="email" name="email" placeholder="Email Address" aria-label="Email address" required><button type="submit">Submit</button>
        </form>
      </div>
      <div><h4>Quick Links</h4><ul><?php foreach ($c['footer']['quick'] as [$label, $h]): ?><li><a href="<?= $e($href($h)) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul></div>
      <div><h4>Services</h4><ul><?php foreach ($c['footer']['services'] as $label): ?><li><a href="index.php#services"><?= $e($label) ?></a></li><?php endforeach ?></ul></div>
      <div>
        <h4>Contact Us</h4>
        <ul><li><?= $e($c['contact']['phone']) ?></li><li><?= $e($c['contact']['email']) ?></li><li><?= $e($c['contact']['address']) ?></li></ul>
        <h4 style="margin-top:20px">Social platforms</h4>
        <ul><?php foreach ($c['footer']['social'] as [$label, $h]): ?><li><a href="<?= $e($h) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul>
      </div>
    </div>
    <p class="copy"><?= $e($c['footer']['copyright']) ?></p>
  </div>
</footer>
</body>
</html>