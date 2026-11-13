<?php
// One template for the service pages. The slug in ?s= picks the words from content-services.php.
require __DIR__ . '/inc/boot.php';
$all = require __DIR__ . '/content-services.php';
$slug = $_GET['s'] ?? '';
if (!isset($all[$slug])) {
    http_response_code(404);
    $title = 'Service not found'; $noindex = true; $seoKey = '404';
    $current = '#services'; $base = 'index.php'; $bootstrap = true; $css = ['about.css', 'service.css'];
    include __DIR__ . '/inc/head.php';
    include __DIR__ . '/inc/site-header.php';
    echo '<section class="ab-intro"><div class="container-fluid ab-wrap text-center"><h1 class="sv-h">Service not found</h1><p class="ab-p mx-auto mt-3"><a href="index.php#services">See all our services</a></p></div></section>';
    echo '</main></body></html>';
    exit;
}
$s = $all[$slug];
$title = $s['name'];
$seoKey = $slug;
$current = '#services';
$base = 'index.php';
$bootstrap = true;
$css = ['about.css', 'service.css'];
$js = ['about.js'];
$bn = ['title' => $s['name'], 'sub' => $s['subtitle'], 'sw' => '900px'];
$b = ['imagination_alt' => 'A startled chick runs through a colourful jungle while an eagle swoops in'];
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<?php include __DIR__ . '/inc/about-banner.php' ?>

<?php include __DIR__ . '/inc/logos.php' ?>

<?php include __DIR__ . '/inc/seo-answer.php' ?>

<?php include __DIR__ . '/inc/svc-intro.php' ?>

<div class="pg solo" style="height:calc(330*var(--u))">
<?php include __DIR__ . '/inc/sec-cta.php' ?>
</div>

<?php include __DIR__ . '/inc/svc-solution.php' ?>

<?php include __DIR__ . (!empty($s['process']) ? '/inc/svc-process.php' : '/inc/svc-how.php') ?>

<?php $pfTabs = $s['portfolio']; include __DIR__ . '/inc/portfolio.php' ?>

<?php include __DIR__ . '/inc/seo-guide.php' ?>

<?php include __DIR__ . '/inc/seo-faq.php' ?>

<?php include __DIR__ . '/inc/seo-related.php' ?>

<?php include __DIR__ . '/inc/book-imagination.php' ?>

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