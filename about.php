<?php
// About Us page, wireframe structure only. Words come from content.php.
$c = require __DIR__ . '/content.php';
$a = $c['about_page'];
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$story = $c['stories']['items'][0];
// the shared nav points to sections on the home page, except About Us which is this page
$href = fn($h) => $h === '#top' ? 'index.php' : (str_starts_with($h, '#') ? 'index.php' . $h : $h);
$ph = fn(string $label, string $cls = '') => '<div class="ph ' . $cls . '"><span>' . $e($label) . '</span></div>';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $e($a['title']) ?> (wireframe)</title>
<link rel="stylesheet" href="wire.css?v=<?= filemtime(__DIR__ . '/wire.css') ?>">
</head>
<body>

<header class="top" data-label="Header">
  <div class="wrap">
    <a href="index.php"><?= $ph('Logo', 'logo') ?></a>
    <nav>
<?php foreach ($c['nav'] as [$label, $h]): ?>
      <a<?= $label === 'About Us' ? ' class="on" href="about.php"' : ' href="' . $e($href($h)) . '"' ?>><?= $e($label) ?></a>
<?php endforeach ?>
    </nav>
  </div>
</header>

<section class="sec hero center band" data-label="1 · Hero banner">
  <div class="wrap">
    <h1><?= $e($a['title']) ?></h1>
    <p><?= $e($a['subtitle']) ?></p>
    <div class="btns"><a class="btn fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a><a class="btn" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a></div>
  </div>
</section>

<section class="sec" data-label="2 · Brand logo strip">
  <div class="wrap brands">
<?php foreach ($c['brands'] as $b): ?>
    <?= $ph($b[0]) ?>
<?php endforeach ?>
  </div>
</section>

<section class="sec" data-label="3 · Intro: text + image">
  <div class="wrap two">
    <div>
      <h2><?php foreach ($a['intro']['heading'] as $l): ?><span><?= $e($l) ?></span><?php endforeach ?></h2>
<?php foreach ($a['intro']['paragraphs'] as $t): ?>
      <p><?= $e($t) ?></p>
<?php endforeach ?>
    </div>
    <?= $ph('Image', 'r43') ?>
  </div>
</section>

<section class="sec" data-label="4 · Call to action bar">
  <div class="wrap cta">
    <div>
      <h2 style="font-size:30px"><?= $e($c['cta']['title']) ?></h2>
      <p><?= $e(implode(' ', $c['cta']['lines'])) ?></p>
    </div>
    <form action="submit.php" method="post" autocomplete="off">
      <input type="hidden" name="form" value="cta"><input type="text" name="website" tabindex="-1" autocomplete="off" hidden>
      <input class="field" name="name" placeholder="Your Name" required>
      <input class="field" name="phone" type="tel" placeholder="Phone Number">
      <input class="field wide" name="message" placeholder="Tell Us About Your Book">
      <button class="btn fill" type="submit"><?= $e($c['cta']['button']) ?></button>
    </form>
  </div>
</section>

<section class="sec band" data-label="5 · The difference: 4 cards">
  <div class="wrap center">
    <h2><?= $e($a['difference']['title']) ?></h2>
    <p class="lead"><?= $e($a['difference']['intro']) ?></p>
    <div class="cards">
<?php foreach ($a['difference']['cards'] as [$title, $text]): ?>
      <div class="card"><?= $ph('Icon') ?><h3><?= $e($title) ?></h3><hr><p><?= $e($text) ?></p></div>
<?php endforeach ?>
    </div>
  </div>
</section>

<section class="sec" data-label="6 · Vision: image + text">
  <div class="wrap two">
    <?= $ph('Image', 'r43') ?>
    <div>
      <h2><?php foreach ($a['vision']['heading'] as $l): ?><span><?= $e($l) ?></span><?php endforeach ?></h2>
<?php foreach ($a['vision']['paragraphs'] as $t): ?>
      <p><?= $e($t) ?></p>
<?php endforeach ?>
    </div>
  </div>
</section>

<section class="sec imag band" data-label="7 · Imagination band">
  <?= $ph('Illustration', 'side l') ?><?= $ph('Illustration', 'side r') ?>
  <div class="wrap">
    <h2>IMAGINATION DESERVES TO</h2>
    <div class="big"><strong>BE SEEN</strong></div>
    <p class="lead"><?= $e(implode(' ', $c['imagination']['lines'])) ?></p>
    <div class="btns"><a class="btn fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a><a class="btn" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a></div>
  </div>
</section>

<section class="sec" data-label="8 · Author stories slider">
  <div class="wrap center">
    <h2>Author Stories</h2>
    <p class="lead"><?= $e($c['stories']['intro']) ?></p>
    <div class="slider">
      <span class="arr" aria-hidden="true">←</span>
      <div>
        <?= $ph('Photo', 'av circle') ?>
        <h3><?= $e($story['name']) ?></h3>
        <q><?= $e(implode(' ', $story['text'])) ?></q>
        <div class="stars" aria-label="<?= (int)$story['stars'] ?> out of 5 stars"><?= str_repeat('★', (int)$story['stars']) ?></div>
      </div>
      <span class="arr" aria-hidden="true">→</span>
    </div>
  </div>
</section>

<section class="sec band" id="contact" data-label="9 · Contact: text + form">
  <div class="wrap two" style="align-items:start">
    <div>
      <h2>Let's Bring Your <span>Story to Life</span></h2>
      <p><?= $e(implode(' ', $c['contact']['lines'])) ?></p>
      <div class="rows">
<?php foreach (['phone', 'email', 'address'] as $k): ?>
        <div><?= $ph('Icon') ?><span><?= $e($c['contact'][$k]) ?></span></div>
<?php endforeach ?>
      </div>
    </div>
    <form class="paper" action="submit.php" method="post" autocomplete="off">
      <input type="hidden" name="form" value="contact"><input type="text" name="website" tabindex="-1" autocomplete="off" hidden>
      <input class="box" name="name" placeholder="Name" required>
      <input class="box" name="email" type="email" placeholder="Email" required>
      <input class="box" name="phone" type="tel" placeholder="Phone">
      <textarea class="box" name="message" placeholder="Message"></textarea>
      <button class="btn fill" type="submit"><?= $e($c['contact']['button']) ?></button>
    </form>
  </div>
</section>

<footer class="foot" data-label="10 · Footer">
  <div class="wrap">
    <div class="cols">
      <div>
        <h2 style="font-size:28px;color:#fff">Bringing Stories to Life.</h2>
        <p><?= $e(implode(' ', $c['footer']['lines'])) ?></p>
        <form class="mail" action="submit.php" method="post">
          <input type="hidden" name="form" value="newsletter">
          <input type="email" name="email" placeholder="Email Address" aria-label="Email address" required><button type="submit">Submit</button>
        </form>
      </div>
      <div><h4>Quick Links</h4><ul><?php foreach ($c['footer']['quick'] as [$label, $h]): ?><li><a href="<?= $e($href($h)) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul></div>
      <div><h4>Services</h4><ul><?php foreach ($c['footer']['services'] as $label): ?><li><a href="index.php#services"><?= $e($label) ?></a></li><?php endforeach ?></ul></div>
      <div>
        <h4>Contact Us</h4>
        <ul><li><?= $e($c['contact']['phone']) ?></li><li><?= $e($c['contact']['email']) ?></li><li><?= $e($c['contact']['address']) ?></li></ul>
        <h4 style="margin-top:22px">Social platforms</h4>
        <ul><?php foreach ($c['footer']['social'] as [$label, $h]): ?><li><a href="<?= $e($h) ?>"><?= $e($label) ?></a></li><?php endforeach ?></ul>
      </div>
    </div>
    <p class="copy"><?= $e($c['footer']['copyright']) ?></p>
  </div>
</footer>

</body>
</html>
