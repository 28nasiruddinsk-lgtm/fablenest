<?php
// FAQ accordion (native <details>, works without JavaScript). The same questions are published as FAQPage data in the <head>.
$sp = $seoAll[$seoKey] ?? null;
if (!$sp || empty($sp['faq'])) return;
?>
<section class="sx-faq" id="faq" aria-labelledby="faq-h">
  <div class="sx-wrap sx-faq__grid">
    <div class="sx-faq__intro sx-reveal">
      <h2 class="sx-h" id="faq-h"><span class="sx-acc">Questions</span> Authors Ask</h2>
      <p>Quick, honest answers about <?= $seoKey === 'home' || $seoKey === 'about' ? 'working with us' : $e(strtolower($seoLabel)) ?>. Can’t see yours? Send us a message and we’ll reply.</p>
      <a class="sx-btn" href="<?= $e(($seoKey === 'home' ? '' : 'index.php') . '#contact') ?>">Ask a question</a>" loading="lazy">
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
</section>