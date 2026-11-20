<?php
// FAQ accordion (native <details>, works without JavaScript). The same questions are published as FAQPage data in the <head>.
$sp = $seoAll[$seoKey] ?? null;
if (!$sp || empty($sp['faq'])) return;
?>
<section class="sx-faq" id="faq" aria-labelledby="faq-h">
  <div class="sx-wrap sx-faq__grid">
    <div class="sx-faq__intro sx-reveal">
      <h2 class="sx-h" id="faq-h">Children&rsquo;s Book <span class="sx-acc">Questions,</span> Answered</h2>
      <p>Quick, honest answers about <?= $seoKey === 'home' || $seoKey === 'about' ? 'working with us' : $e(strtolower($seoLabel)) ?>. Can’t see yours? Send us a message and we’ll reply.</p>
      <a class="sx-btn" href="<?= $e(($seoKey === 'home' ? '' : 'index.php') . '#contact') ?>">Ask a question</a>
    </div>
    <div class="sx-faq__list">
<?php foreach ($sp['faq'] as $i => [$q, $a]): ?>
      <details class="sx-q sx-reveal" style="--i:<?= $i ?>"<?= $i === 0 ? ' open' : '' ?>>
        <summary><span><?= $e($q) ?></span></summary>
        <p><?= $e($a) ?></p>
      </details>
<?php endforeach ?>
    </div>
  </div>
</section><script>
// phones: show the first five questions, the rest sit behind one button (they stay in the page for search engines)
(function () {
  if (!matchMedia('(max-width:700px)').matches) return;
  var list = document.querySelector('.sx-faq__list'), qs = list ? list.querySelectorAll('.sx-q') : [];
  if (qs.length <= 6) return;
  for (var i = 5; i < qs.length; i++) qs[i].hidden = true;
  var b = document.createElement('button');
  b.type = 'button'; b.className = 'sx-more'; b.textContent = 'Show ' + (qs.length - 5) + ' more questions';
  b.onclick = function () { for (var i = 5; i < qs.length; i++) qs[i].hidden = false; b.remove(); };
  list.appendChild(b);
})();
</script>
