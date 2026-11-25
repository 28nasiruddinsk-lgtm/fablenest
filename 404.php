<?php
// Friendly "not found" page (Apache ErrorDocument). Not indexed.
require __DIR__ . '/inc/boot.php';
http_response_code(404);
$title = 'Page not found';
$noindex = true;
$seoKey = '404';
$current = '';
$base = 'index.php';
$bootstrap = true;
$css = ['about.css', 'service.css'];
include __DIR__ . '/inc/head.php';
include __DIR__ . '/inc/site-header.php';
?>
<section class="ab-intro"><div class="container-fluid ab-wrap text-center py-5">
  <h1 class="sv-h">That Page <span class="sv-acc">Wandered Off</span></h1>
  <p class="ab-p mx-auto mt-3" style="max-width:640px">The address may have changed or the page may no longer exist. Try one of these instead:</p>
  <p class="mt-4"><a class="sx-btn" href="/">Home</a> <a class="sx-btn" href="/book-publishing">Book publishing</a> <a class="sx-btn" href="/about">About us</a></p>
</div></section>
<div class="pg solo" style="margin-top:calc(80*var(--u))">
<?php include __DIR__ . '/inc/site-footer.php' ?>
</div>
</main>
<?php include __DIR__ . '/inc/scripts.php' ?>
</body>
</html>
