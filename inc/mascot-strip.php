<?php // A row with all seven chick mascots, bouncing when you pass over them (shown above the footer on every page). ?>
<section class="mst" aria-label="Our little chick mascot">
  <p class="mst__t sx-reveal">Meet the little chick who loves a good story</p>
  <div class="mst__row">
<?php foreach (['book', 'seeds', 'puddle', 'flying', 'music', 'hanging', 'bubbles'] as $i => $n): [$src, $alt] = seo_mascot($n); ?>
    <figure class="mst__i sx-reveal" style="--i:<?= $i ?>"><img src="<?= $e($src) ?>" alt="<?= $e($alt) ?>" loading="lazy"></figure>
<?php endforeach ?>
  </div>
</section>