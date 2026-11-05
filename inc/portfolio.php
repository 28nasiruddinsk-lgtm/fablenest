<?php
// Portfolio: tabs for book covers, illustrations, book trailer, author website.
// A page picks which tabs it shows with $pfTabs = ['covers', ...]; leave it unset to show all four.
$work = $c['work'];
$pfTabs = array_values(array_filter($pfTabs ?? array_keys($work['tabs']), fn($t) => isset($work['tabs'][$t])));
if (!$pfTabs) return;
?>
<section class="pf" id="portfolio" data-pf>
  <div class="container-fluid ab-wrap">
    <h2 class="pf__h ab-reveal"><img src="assets/s/h_stories.jpg" alt="Stories We've Helped Bring to Life."></h2>
    <p class="pf__lead ab-reveal"><?= $e($work['intro']) ?></p>
<?php if (count($pfTabs) > 1): ?>
    <div class="pf__tabs ab-reveal" role="tablist" aria-label="Portfolio">
<?php foreach ($pfTabs as $i => $t): ?>
      <button type="button" role="tab" id="pf-tab-<?= $e($t) ?>" aria-controls="pf-<?= $e($t) ?>" aria-selected="<?= $i ? 'false' : 'true' ?>" data-tab="<?= $e($t) ?>"><?= $e($work['tabs'][$t]['label']) ?></button>
<?php endforeach ?>
    </div>
<?php endif ?>
<?php foreach ($pfTabs as $i => $t): $tab = $work['tabs'][$t]; ?>
    <div class="pf__panel<?= $i ? '' : ' is-on' ?>" id="pf-<?= $e($t) ?>" role="tabpanel"<?= count($pfTabs) > 1 ? ' aria-labelledby="pf-tab-' . $e($t) . '"' : '' ?> data-kind="<?= $e($t) ?>"<?= $i ? ' hidden' : '' ?>>
      <div class="row g-4 justify-content-center">
<?php foreach ($tab['items'] as $n => [$name, $img, $href, $cap]): $tag = $href ? 'a' : 'div'; ?>
        <div class="<?= $t === 'covers' ? 'col-6 col-lg-3' : ($t === 'illustrations' ? 'col-sm-6 col-lg-4' : 'col-md-9 col-lg-6') ?> pf__cell" style="--n:<?= $n ?>">
          <<?= $tag ?> class="pf__card pf__card--<?= $e($t) ?>"<?= $href ? ' href="' . $e($href) . '"' : '' ?> style="--ratio:<?= $e($tab['ratio']) ?>">
<?php if ($t === 'websites'): ?>
            <span class="pf__bar" aria-hidden="true"><i></i><i></i><i></i><b><?= $e($cap) ?></b></span>
<?php endif ?>
            <span class="pf__pic"><img src="<?= $e($img) ?>" alt="<?= $e($name) ?>" loading="lazy"><?php if ($t === 'trailers'): ?><span class="pf__play" aria-hidden="true"></span><?php endif ?></span>
            <span class="pf__meta"><strong><?= $e($name) ?></strong><?php if ($t !== 'websites'): ?><small><?= $e($cap) ?></small><?php endif ?></span>
          </<?= $tag ?>>
        </div>
<?php endforeach ?>
      </div>
    </div>
<?php endforeach ?>
  </div>
</section>