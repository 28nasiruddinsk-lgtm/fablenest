<section class="logos" aria-label="Where your book is sold">
  <div class="logos-view"><div class="logos-track">
<?php
$offs = [-3, 352, 703, 1051];
for ($cycle = 0; $cycle < 3; $cycle++) {
    foreach ($c['brands'] as $i => [$name, $src, $top, $w]) {
        $first = $cycle === 0;
        echo '    <img src="', $e($src), '" alt="', $first ? $e($name) : '', '"', $first ? '' : ' aria-hidden="true"',
            ' style="left:calc(', $cycle * 1317 + $offs[$i], '*var(--u));top:calc(', $top, '*var(--u))">', "\n";
    }
}
?>
  </div></div>
</section>
