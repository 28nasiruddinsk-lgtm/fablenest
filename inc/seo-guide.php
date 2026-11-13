<?php
// Long-form guide: what it is + who it suits, numbered steps, and a short glossary, each with a chick mascot.
// The same steps and terms are published as HowTo and DefinedTermSet data in the <head>.
$gd = ($guideAll ?? [])[$seoKey] ?? null;
if (!$gd) return;
[$mg] = seo_mascots($seoKey);
?>
<section class="sx-guide" id="guide" aria-labelledby="guide-h">
  <div class="sx-wrap">
    <div class="sx-guide__top">
      <figure class="sx-mascot sx-mascot--a sx-reveal"><img src="<?= $e(seo_cut($mg[0])) ?>" alt="<?= $e($mg[1]) ?>" loading="lazy"></figure>
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

  </div>
</section>

<section class="sx-band sx-band--steps" aria-labelledby="steps-h">
  <div class="sx-wrap">
    <h3 class="sx-h2 sx-steps__h sx-reveal" id="steps-h">Step by step</h3>
    <ol class="sx-steps sx-steps--n<?= count($gd['steps']) ?>">
<?php foreach ($gd['steps'] as $i => [$name, $text]): ?>
      <li class="sx-step sx-reveal" style="--i:<?= $i ?>">
        <span class="sx-step__n"><?= $i + 1 ?></span>
        <div><h4><?= $e($name) ?></h4><p><?= $e($text) ?></p></div>
      </li>
<?php endforeach ?>
    </ol>

  </div>
</section>

<section class="sx-band sx-band--terms" aria-labelledby="terms-h">
  <div class="sx-wrap">
    <div class="sx-terms sx-terms--solo">
      <div class="sx-terms__list sx-reveal">
        <h3 class="sx-h2" id="terms-h">Key terms, in plain words</h3>
        <dl>
<?php foreach ($gd['terms'] as [$term, $def]): ?>
          <div><dt><?= $e($term) ?></dt><dd><?= $e($def) ?></dd></div>
<?php endforeach ?>
        </dl>
      </div>
    </div>
  </div>
</section>