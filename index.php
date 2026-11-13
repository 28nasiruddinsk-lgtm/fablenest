<?php
$c = require __DIR__ . '/content.php';
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$br = fn(array $lines) => implode('<br>', array_map(fn($l) => $l === '' ? '&nbsp;' : htmlspecialchars($l, ENT_NOQUOTES, 'UTF-8'), $lines));
$stories = $c['stories']['items'];

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="only light">
<?php $seoKey = 'home'; include __DIR__ . '/inc/seo.php' ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Comic+Relief:wght@700&family=Figtree:wght@400;500&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="assets/favicon.png">
<link rel="stylesheet" href="style.css?v=<?= filemtime(__DIR__ . '/style.css') ?>">
<link rel="stylesheet" href="seo.css?v=<?= filemtime(__DIR__ . '/seo.css') ?>">
<link rel="stylesheet" href="service.css?v=<?= filemtime(__DIR__ . '/service.css') ?>">
<script>document.documentElement.classList.add('js')</script>
</head>
<body>
<main>

<?php include __DIR__ . '/inc/site-header.php' ?>

<section class="hero" id="top">
  <div class="layer canopy"></div>
  <div class="layer crop wood-a"><img src="assets/fig/wood-r1.png" alt=""></div>
  <div class="layer glow"></div>
  <div class="layer crop wood-b"><img src="assets/fig/wood-r1.png" alt=""></div>
  <div class="layer crop wood-c"><img src="assets/fig/wood-r4.png" alt=""></div>
  <div class="layer fade-bottom"></div>
  <div class="layer fade-top"></div>

  <h1 class="sr"><?= $e($c['title']) ?></h1>
<?php readfile(__DIR__ . '/parts/headline.html') ?>

  <p class="lead" data-words><?= $br($c['hero']['lead']) ?></p>
  <a class="btn btn-fill" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
  <div class="boy"><img src="assets/fig/chick.webp" alt="<?= $e($c['hero']['boy_alt']) ?>"></div>
  <a class="btn btn-line" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
  <a class="scroll" href="#about" aria-label="Scroll down"><svg viewBox="0 0 19 28" width="19" height="28" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 1v25M1.5 17.5l8 8.5 8-8.5"/></svg></a>

  <form class="paper" action="submit.php" method="post" data-form>
    <div class="paper-crop"><img src="assets/fig/paper-raw.png" alt=""></div>
    <img class="paper-title" src="assets/fig/paper-title.svg" alt="Start Your Publishing Journey">
    <input type="hidden" name="form" value="hero"><input class="hp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
    <label class="f f-name"><span>Name</span><input type="text" name="name" autocomplete="name" required></label>
    <label class="f f-email"><span>Email</span><input type="email" name="email" autocomplete="email" required></label>
    <label class="f f-msg"><span>Message</span><textarea name="message"></textarea></label>
    <button type="submit">Start My Story</button>
  </form>
</section>

<?php include __DIR__ . '/inc/logos.php' ?>

<?php include __DIR__ . '/inc/seo-answer.php' ?>

<div class="pg home" style="height:calc(3134*var(--u))">

<section class="sec" id="about" style="--y0:1300;--h:880">
  <?php [$ms, $msAlt] = seo_mascot('music'); ?><div class="a rv rv-r about-mascot" style="--x:1000;--y:1300;--w:760;--h:700;--d:.15"><img src="<?= $e(seo_cut($ms)) ?>" alt="<?= $e($msAlt) ?>" decoding="async"></div>
  <h2 class="a th rv rv-wipe" style="--x:140;--y:1322;--w:760;--h:200;--fs:84">Every <em>great story</em><br>Has a beginning</h2>
  <p class="a t20 rv-lines stag" style="--x:157;--y:1517;--w:760;--h:340;--d:.5"><?= $br($c['about']['lines']) ?></p>
  <a class="a b2 fill rv rv-pop" style="--x:162;--y:1931;--w:216;--h:59;--d:1.5" href="#contact"><?= $e($c['hero']['cta'][0]) ?></a>
  <a class="a b2 line rv rv-pop" style="--x:400;--y:1931;--w:195;--h:59;--d:1.65" href="#contact"><?= $e($c['hero']['cta'][1]) ?></a>
</section>

<?php include __DIR__ . '/inc/sec-cta.php' ?>

<section class="sec wd" id="services" style="--y0:2554;--h:1800">
  <img class="a" style="--x:18;--y:2555;--w:1884;--h:1792" src="assets/s/whatdo.jpg" alt="" decoding="async">
  <h2 class="a th th--dark th--c rv rv-pop" style="--x:660;--y:2606;--w:600;--h:105;--d:.2;--fs:82">What <em>We Do</em></h2>
  <p class="a t20 c wwd-sub rv" style="--x:0;--y:2701;--w:1920;--h:28;--d:.5"><?= $e($c['services']['intro']) ?></p>
  <svg class="a" style="--x:18;--y:2555;--w:1884;--h:1792" viewBox="18 2555 1884 1792" role="img" aria-label="Our services: <?= $e(implode(', ', $c['services']['list'])) ?>">
    <defs>
      <filter id="glow" x="-300%" y="-300%" width="700%" height="700%"><feGaussianBlur stdDeviation="10"/></filter>
      <filter id="soft" x="-20%" y="-20%" width="140%" height="140%"><feGaussianBlur stdDeviation="20"/></filter>
      <mask id="dm" maskUnits="userSpaceOnUse" x="18" y="2555" width="1884" height="1792">
        <path id="revealPath" fill="none" stroke="#fff" stroke-width="70" stroke-linecap="round" stroke-linejoin="round"/>
      </mask>
    </defs>
    <path id="routePath" fill="none" stroke="none"/>
    <g class="stop" data-i="0"><rect class="dim" x="280" y="2790" width="480" height="380" rx="60"/></g>
    <g class="stop" data-i="1"><rect class="dim" x="1250" y="3190" width="520" height="300" rx="60"/></g>
    <g class="stop" data-i="2"><rect class="dim" x="280" y="3540" width="480" height="340" rx="60"/></g>
    <g class="stop" data-i="3"><rect class="dim" x="1180" y="3850" width="460" height="240" rx="60"/><rect class="dim" x="1200" y="4180" width="540" height="120" rx="40"/></g>
    <image href="assets/s/dashes.png" x="18" y="2555" width="1884" height="1792" mask="url(#dm)"/>
<?php foreach ([[277, 3086, 454, 88, 662, 2935], [1327, 3411, 446, 88, 1328, 3290], [274, 3797, 460, 92, 717, 3562], [1211, 4197, 520, 92, 1303, 3940]] as $i => [$x, $y, $w, $h, $cx, $cy]): ?>
    <g class="stop" data-i="<?= $i ?>"><rect class="lg" x="<?= $x ?>" y="<?= $y ?>" width="<?= $w ?>" height="<?= $h ?>" rx="14"/><circle class="ring" cx="<?= $cx ?>" cy="<?= $cy ?>" r="22"/><circle class="ring r2" cx="<?= $cx ?>" cy="<?= $cy ?>" r="22"/></g>
<?php endforeach ?>
    <g id="bursts"></g>
    <g id="tracer"></g>
  </svg>
</section>

</div>

<section class="sx-bridge" aria-label="How we work">
  <div class="sx-wrap">
    <p class="sx-bridge__k">One team, one plan</p>
    <h2 class="sx-h">Every book is different.<br><span class="sx-acc">Your plan</span> should be too.</h2>
    <p>We start by listening: who the book is for, where you want it sold and how much you want us to handle. Then we build a simple step-by-step plan, so you always know what happens next.</p>
    <a class="sx-btn" href="#contact">Talk to us</a>
  </div>
</section>

<?php include __DIR__ . '/inc/seo-guide.php' ?>

<div class="pg solo" style="height:calc(710*var(--u));margin-top:calc(160*var(--u))">
<section class="sec" id="portfolio" style="--y0:6500;--h:710">
  <h2 class="a th th--c rv rv-wipe" style="--x:260;--y:6506;--w:1400;--h:100;--fs:74">Stories <em>We&rsquo;ve Helped</em> Bring to Life.</h2>
  <p class="a t20 c rv" style="--x:0;--y:6599;--w:1920;--h:28;--d:.4"><?= $e($c['portfolio']['intro']) ?></p>
<?php $covers = $c['work']['tabs']['covers']['items']; ?>
  <div class="a pfw" style="--x:0;--y:6665;--w:1920;--h:545;--n:<?= count($covers) ?>">
    <div class="pfs" tabindex="0" role="region" aria-label="Book covers we have worked on">
      <div class="pfs__track">
<?php foreach ([0, 1] as $copy): foreach ($covers as [$title, $img]): ?>
        <figure class="pfs__item"<?= $copy ? ' aria-hidden="true"' : '' ?>>
          <img class="pfs__cover" src="<?= $e($img) ?>" alt="<?= $copy ? '' : $e($title) ?>" loading="lazy">
        </figure>
<?php endforeach; endforeach ?>
      </div>
    </div>
    <button type="button" class="pfw__btn pfw__btn--prev" aria-label="Previous books"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12H4M10 6l-6 6 6 6"/></svg></button>
    <button type="button" class="pfw__btn pfw__btn--next" aria-label="Next books"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16M14 6l6 6-6 6"/></svg></button>
  </div>
</section>
</div>

<div class="pg solo" style="height:calc(825*var(--u));margin-top:calc(160*var(--u))">
<section class="sec" id="why" style="--y0:5515;--h:825">
  <img class="a rv" style="--x:18;--y:5515;--w:1884;--h:825" src="assets/s/why.jpg" alt="" decoding="async" loading="lazy">
  <h2 class="a th th--dark th--c rv rv-pop" style="--x:660;--y:5568;--w:600;--h:95;--d:.2;--fs:78">Why <em>Choose</em> Us?</h2>
  <p class="a t20 c rv" style="--x:0;--y:5658;--w:1920;--h:28;--d:.5;color:#fff"><?= $e($c['why']['intro']) ?></p>
<?php foreach ([[298, 5708, 262, 'l'], [1362, 5708, 262, 'r'], [437, 6046, 264, 'l'], [1238, 6046, 264, 'r']] as $i => [$x, $y, $w, $side]): ?>
  <div class="a card rv rv-<?= $side ?>" style="--x:<?= $x ?>;--y:<?= $y ?>;--w:<?= $w ?>;--h:226;--d:<?= .6 + $i * .2 ?>"><img src="assets/s/card<?= $i + 1 ?>.jpg" alt="<?= $e($c['why']['cards'][$i]) ?>"></div>
<?php endforeach ?>
</section>
</div>

<?php include __DIR__ . '/inc/book-imagination.php' ?>

<?php include __DIR__ . '/inc/seo-faq.php' ?>

<div class="pg solo" style="height:calc(808*var(--u));margin-top:calc(60*var(--u))">
<?php include __DIR__ . '/inc/sec-stories.php' ?>
</div>

<div class="pg solo" style="height:calc(740*var(--u));margin-top:calc(147*var(--u))">
<?php include __DIR__ . '/inc/sec-contact.php' ?>
</div>

<div class="pg solo" style="margin-top:calc(80*var(--u))">
<?php include __DIR__ . '/inc/site-footer.php' ?>
</div>
</main>
<?php include __DIR__ . '/inc/scripts.php' ?>
</body>
</html>
