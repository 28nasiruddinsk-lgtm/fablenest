<?php
// Long-form guide: what it is + who it suits, numbered steps, and a short glossary, each with a chick mascot.
// The same steps and terms are published as HowTo and DefinedTermSet data in the <head>.
$gd = ($guideAll ?? [])[$seoKey] ?? null;
if (!$gd) return;
[$mg, $mt] = seo_mascots($seoKey);
?>
<section class="sx-guide" id="guide" aria-labelledby="guide-h">
  <div class="sx-wrap">
    <div class="sx-guide__top">
      <figure class="sx-mascot sx-mascot--a sx-reveal"><img src="<?= $e($mg[0]) ?>" alt="<?= $e($mg[1]) ?>" loading="lazy"></figure>
      <div class="sx-guide__text sx-reveal sx-reveal--late">
        <h2 class="sx-h" id="guide-h"><?= $e($gd['title']) ?></h2>
        <p class="sx-lead"><?= $e($gd['lead']) ?></p>
<?php foreach ($gd['body'] as $t): ?>
        <p><?= $e($t) ?></p>
<?php endforeach ?>
        <h3 class="sx-h3">Who this is for</h3>
        <ul class="sx-chips">
<?php foreach ($gd['who'] as $w): ?>
          <li><?= $e($w) ?></li>
<?php endforeach ?>
        </ul>
      </div>
    </div>

    <h3 class="sx-h2 sx-steps__h sx-reveal">Step by step</h3>
    <ol class="sx-steps">
<?php foreach ($gd['steps'] as $i => [$name, $text]): ?>
      <li class="sx-step sx-reveal" style="--i:<?= $i ?>">
        <span class="sx-step__n"><?= $i + 1 ?></span>
        <div><h4><?= $e($name) ?></h4><p><?= $e($text) ?></p></div>
      </li>
<?php endforeach ?>
    </ol>

    <div class="sx-terms">
      <div class="sx-terms__list sx-reveal">
        <h3 class="sx-h2">Key terms, in plain words</h3>
        <dl>
<?php foreach ($gd['terms'] as [$term, $def]): ?>
          <div><dt><?= $e($term) ?></dt><dd><?= $e($def) ?></dd></div>
<?php endforeach ?>
        </dl>
      </div>
      <figure class="sx-mascot sx-mascot--b sx-reveal sx-reveal--late"><img src="<?= $e($mt[0]) ?>" alt="<?= $e($mt[1]) ?>" loading="lazy"></figure>
    </div>
  </div>
</section>