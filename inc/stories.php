<section class="ws" data-label="author stories (slider)">
  <div class="wrap wcenter">
    <h2>Author Stories</h2>
    <p class="wlead"><?= $e($c['stories']['intro']) ?></p>
    <div class="slider">
      <span class="warr" aria-hidden="true">←</span>
      <div>
        <?= $ph('photo', 'av circle') ?>
        <h3><?= $e($story['name']) ?></h3>
        <q><?= $e(implode(' ', $story['text'])) ?></q>
        <div class="wstars" aria-label="<?= (int)$story['stars'] ?> out of 5 stars"><?= str_repeat('★', (int)$story['stars']) ?></div>
      </div>
      <span class="warr" aria-hidden="true">→</span>
    </div>
  </div>
  <span class="note" style="left:60px;top:150px">real quotes still missing!</span>
</section>