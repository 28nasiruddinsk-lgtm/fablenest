<?php
// Book Publishing service page. Header, footer and the sections shared with the other pages live in inc/.
require __DIR__ . '/inc/boot.php';
$b = $c['book_page'];
$title = $b['title'];
$current = '#services';
$seoKey = 'book-publishing';
$base = 'index.php';
$bootstrap = true;
$css = ['about.css', 'service.css'];
$js = ['about.js'];
$bn = ['title' => $b['title'], 'sub' => $b['subtitle'], 'img' => 'assets/s/bk_h_book.jpg', 'w' => 'clamp(280px,34.4vw,660px)', 'sw' => '900px'];
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>

<?php include __DIR__ . '/inc/logos.php' ?>

<?php include __DIR__ . '/inc/seo-answer.php' ?>

<?php include __DIR__ . '/inc/book-intro.php' ?>

<div class="pg solo" style="height:calc(330*var(--u))">
<?php include __DIR__ . '/inc/sec-cta.php' ?>
</div>

<?php include __DIR__ . '/inc/book-solution.php' ?>

<?php include __DIR__ . '/inc/book-how.php' ?>

<?php $pfTabs = ['covers']; include __DIR__ . '/inc/portfolio.php' ?>

<?php include __DIR__ . '/inc/seo-guide.php' ?>

<?php include __DIR__ . '/inc/seo-faq.php' ?>

<?php include __DIR__ . '/inc/seo-related.php' ?>

<?php include __DIR__ . '/inc/book-imagination.php' ?>

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