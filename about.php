<?php
// About Us page. Header, footer and the sections shared with the home page live in inc/.
require __DIR__ . '/inc/boot.php';
$a = $c['about_page'];
$title = $a['title'];
$current = 'about.php';
$seoKey = 'about';
$bootstrap = true;
$css = ['about.css'];
$js = ['about.js'];
$base = 'index.php';
$bn = ['title' => $a['title'], 'sub' => $a['subtitle'], 'img' => 'assets/s/h_about.png'];
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>

<?php include __DIR__ . '/inc/logos.php' ?>

<?php include __DIR__ . '/inc/seo-answer.php' ?>

<?php include __DIR__ . '/inc/about-intro.php' ?>

<div class="pg solo" style="height:calc(330*var(--u))">
<?php include __DIR__ . '/inc/sec-cta.php' ?>
</div>

<?php include __DIR__ . '/inc/about-diff.php' ?>

<?php include __DIR__ . '/inc/about-vision.php' ?>

<?php include __DIR__ . '/inc/seo-guide.php' ?>

<?php include __DIR__ . '/inc/seo-faq.php' ?>

<div class="pg solo" style="height:calc(897*var(--u))">
<?php include __DIR__ . '/inc/sec-imagination.php' ?>
</div>

<div class="pg solo" style="height:calc(728*var(--u));margin-top:calc(60*var(--u))">
<?php include __DIR__ . '/inc/sec-stories.php' ?>
</div>

<div class="pg solo" style="height:calc(740*var(--u));margin-top:calc(147*var(--u))">
<?php include __DIR__ . '/inc/sec-contact.php' ?>
</div>
<?php include __DIR__ . '/inc/mascot-strip.php' ?>

<div class="pg solo" style="margin-top:calc(80*var(--u))">
<?php include __DIR__ . '/inc/site-footer.php' ?>
</div>
</main>
<?php include __DIR__ . '/inc/scripts.php' ?>
</body>
</html>