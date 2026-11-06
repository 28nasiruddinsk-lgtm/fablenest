<?php
// Illustration process: one chick drawn in four stages (client's rough idea -> line art -> colour -> final).
// Needs $s['process']. The picture is built from the shape list below, so the same outlines are reused at every stage.
$pr = $s['process'];
$circ = fn($cx, $cy, $r) => "M" . ($cx - $r) . " $cy a$r $r 0 1 0 " . (2 * $r) . " 0 a$r $r 0 1 0 -" . (2 * $r) . " 0Z";
// [id, path, flat colour, final gradient (or null), outlined?]
$shapes = [
    ['feetL', 'M250 510 L222 548 L254 541 L276 550 L282 512Z', '#ff9a2e', null, true],
    ['feetR', 'M350 510 L378 548 L346 541 L324 550 L318 512Z', '#ff9a2e', null, true],
    ['wingL', 'M178 352 C128 346 100 392 118 430 C150 436 178 414 184 384Z', '#f5b82e', 'gWing', true],
    ['wingR', 'M422 352 C472 346 500 392 482 430 C450 436 422 414 416 384Z', '#f5b82e', 'gWing', true],
    ['body', 'M168 392 C168 300 235 258 300 258 C365 258 432 300 432 392 C432 472 372 518 300 518 C228 518 168 472 168 392Z', '#ffd84a', 'gBody', true],
    ['book', 'M236 392 L364 392 L364 480 L236 480Z', '#2f9e63', 'gBook', true],
    ['pageL', 'M246 400 L296 400 L296 472 L246 472Z', '#fffaf0', null, true],
    ['pageR', 'M304 400 L354 400 L354 472 L304 472Z', '#fffaf0', null, true],
    ['head', 'M196 240 C196 168 242 126 300 126 C358 126 404 168 404 240 C404 302 358 338 300 338 C242 338 196 302 196 240Z', '#ffd84a', 'gBody', true],
    ['cheekL', $circ(238, 282, 13), '#ff9aa2', null, false],
    ['cheekR', $circ(362, 282, 13), '#ff9aa2', null, false],
    ['cap', 'M204 198 C212 142 258 104 310 106 C362 110 396 150 400 198 C340 176 270 180 204 198Z', '#3c68c8', 'gCap', true],
    ['brim', 'M188 202 C250 186 336 188 414 208 C392 228 300 220 188 202Z', '#2d54ae', null, true],
    ['pom', $circ(304, 98, 15), '#ffffff', null, true],
    ['beak', 'M284 266 C292 262 308 262 316 266 C312 282 306 292 300 296 C294 292 288 282 284 266Z', '#ff9a2e', null, true],
    ['eyeL', $circ(264, 244, 18), '#ffffff', null, true],
    ['eyeR', $circ(336, 244, 18), '#ffffff', null, true],
    ['pupL', $circ(267, 246, 8), '#3a2312', null, false],
    ['pupR', $circ(333, 246, 8), '#3a2312', null, false],
];
// lines that have no fill: smile, cap stripe, book spine and text lines
$extra = ['M283 306 Q300 320 317 306', 'M214 178 C262 162 342 162 392 182', 'M300 392 L300 480', 'M256 416 L288 416', 'M256 432 L288 432', 'M256 448 L284 448', 'M312 416 L344 416', 'M312 432 L344 432'];
// beginner "construction" lines that only the first sketch has
$guides = ['M190 240 a110 110 0 1 1 220 0 a110 110 0 1 1 -220 0', 'M300 118 L300 346', 'M190 246 L410 246', 'M262 262 L338 262', 'M168 392 C168 300 235 258 300 258'];
?>
<section class="pr" id="process" data-process data-stage="1" aria-labelledby="pr-h">
  <div class="pr__panel">
    <div class="container-fluid ab-wrap">
      <div class="row align-items-center g-5">
        <div class="col-lg-5 ab-reveal">
          <h2 class="sv-h pr__h" id="pr-h"><?php foreach ($pr['title'] as $n => $line): ?><span class="<?= $n === 0 ? 'sv-acc' : '' ?>"><?= $e($line) ?></span> <?php endforeach ?></h2>
          <p class="pr__lead"><?= $e($pr['intro']) ?></p>
          <ol class="pr__steps">
<?php foreach ($pr['steps'] as $i => [$name, $text, $tag]): ?>
            <li class="pr__step<?= $i === 0 ? ' is-on' : '' ?>" data-step="<?= $i + 1 ?>">
              <button type="button" aria-label="Show step <?= $i + 1 ?>: <?= $e($name) ?>">
                <span class="pr__num"><?= $i + 1 ?></span>
                <span class="pr__txt"><strong><?= $e($name) ?></strong><small><?= $e($text) ?></small></span>
                <em class="pr__tag"><?= $e($tag) ?></em>
              </button>
            </li>
<?php endforeach ?>
          </ol>
          <button type="button" class="pr__replay" hidden>Watch it again</button>
        </div>
        <div class="col-lg-7 ab-reveal ab-reveal--late">
          <div class="pr__stage">
            <span class="pr__tape pr__tape--l" aria-hidden="true"></span><span class="pr__tape pr__tape--r" aria-hidden="true"></span>
            <svg class="pr__svg" viewBox="0 0 600 620" role="img" aria-label="A chick in a blue cap reading a book, shown as a rough sketch, line art, colour and the final illustration">
              <defs>
                <filter id="pencil" x="-5%" y="-5%" width="110%" height="110%"><feTurbulence type="fractalNoise" baseFrequency=".035" numOctaves="2" seed="4" result="n"/><feDisplacementMap in="SourceGraphic" in2="n" scale="7"/></filter>
                <filter id="soft" x="-20%" y="-20%" width="140%" height="140%"><feGaussianBlur stdDeviation="9"/></filter>
                <radialGradient id="gBody" cx=".38" cy=".3" r=".85"><stop offset="0" stop-color="#fff3a0"/><stop offset=".55" stop-color="#ffd84a"/><stop offset="1" stop-color="#f2a91e"/></radialGradient>
                <linearGradient id="gWing" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#ffd05a"/><stop offset="1" stop-color="#e8921a"/></linearGradient>
                <linearGradient id="gCap" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#6a95ee"/><stop offset="1" stop-color="#2a4ca8"/></linearGradient>
                <linearGradient id="gBook" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#4dc287"/><stop offset="1" stop-color="#1f7a4a"/></linearGradient>
                <linearGradient id="gSky" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#9fd8ff"/><stop offset=".7" stop-color="#e6f7ff"/><stop offset="1" stop-color="#fff6d6"/></linearGradient>
                <clipPath id="prWipe"><rect class="pr__wipe" x="0" y="0" width="600" height="620"/></clipPath>
                <clipPath id="prCard"><rect x="0" y="0" width="600" height="620" rx="26"/></clipPath>
              </defs>

              <!-- 4 · final scene behind the character -->
              <g class="pr__bg" clip-path="url(#prCard)">
                <rect width="600" height="620" fill="url(#gSky)"/>
                <circle cx="500" cy="96" r="46" fill="#ffe27a"/><circle cx="500" cy="96" r="64" fill="#ffe27a" opacity=".3"/>
                <path d="M-10 470 C120 410 230 430 330 460 C430 490 520 450 620 420 L620 640 L-10 640Z" fill="#7ed17a"/>
                <path d="M-10 520 C100 490 220 510 320 535 C420 560 520 520 620 505 L620 640 L-10 640Z" fill="#5bb866"/>
                <g class="pr__cloud"><path d="M70 120 q0-26 28-26 q10-22 40-14 q30-4 34 24 q26 2 22 28 h-140 q-8-6 16-12Z" fill="#fff" opacity=".95"/></g>
                <g fill="#ff7aa8"><circle cx="90" cy="560" r="9"/><circle cx="130" cy="585" r="7"/><circle cx="500" cy="570" r="9"/></g>
                <g fill="#fff"><circle cx="90" cy="560" r="3.5"/><circle cx="130" cy="585" r="2.8"/><circle cx="500" cy="570" r="3.5"/></g>
              </g>
              <ellipse class="pr__shadow" cx="300" cy="556" rx="130" ry="16" fill="#1b5a34" opacity=".28" filter="url(#soft)"/>

              <!-- 3 · flat colour, painted in from the left; the final stage swaps in gradients -->
              <g clip-path="url(#prWipe)">
                <g class="pr__fills">
<?php foreach ($shapes as [$id, $d, $fill, $grad]): ?>
                  <path d="<?= $d ?>" fill="<?= $fill ?>"/>
<?php endforeach ?>
                </g>
                <g class="pr__shade">
<?php foreach ($shapes as [$id, $d, $fill, $grad]): if ($grad): ?>
                  <path d="<?= $d ?>" fill="url(#<?= $grad ?>)"/>
<?php endif; endforeach ?>
                </g>
              </g>

              <!-- 2 · clean line art -->
              <g class="pr__line" fill="none" stroke="#17301f" stroke-width="4.2" stroke-linecap="round" stroke-linejoin="round">
<?php foreach ($shapes as [$id, $d, $fill, $grad, $out]): if ($out): ?>
                <path d="<?= $d ?>" pathLength="1"/>
<?php endif; endforeach ?>
<?php foreach ($extra as $d): ?>
                <path d="<?= $d ?>" pathLength="1"/>
<?php endforeach ?>
              </g>

              <!-- 1 · the client's own rough pencil idea, wobbly on purpose -->
              <g class="pr__sketch" fill="none" stroke-linecap="round" stroke-linejoin="round" filter="url(#pencil)">
                <g class="pr__guides" stroke="#9aa6c8" stroke-width="1.6" stroke-dasharray="6 7">
<?php foreach ($guides as $d): ?>
                  <path d="<?= $d ?>" pathLength="1"/>
<?php endforeach ?>
                </g>
                <g stroke="#6b6b6b" stroke-width="2.4">
<?php foreach ($shapes as [$id, $d, $fill, $grad, $out]): if ($out && !in_array($id, ['pageL', 'pageR', 'pom', 'brim'], true)): ?>
                  <path d="<?= $d ?>" pathLength="1"/>
<?php endif; endforeach ?>
                </g>
                <g stroke="#9b9b9b" stroke-width="1.5" transform="translate(3 -2) rotate(.5 300 300)">
<?php foreach ($shapes as [$id, $d, $fill, $grad, $out]): if ($out && in_array($id, ['head', 'body', 'cap', 'wingL', 'wingR'], true)): ?>
                  <path d="<?= $d ?>" pathLength="1"/>
<?php endif; endforeach ?>
                </g>
                <g stroke="#6b6b6b" stroke-width="2.2">
                  <path d="M283 306 Q300 318 317 306" pathLength="1"/><path d="M236 392 L364 392 L364 480 L236 480Z" pathLength="1"/><path d="M300 392 L300 480" pathLength="1"/>
                </g>
              </g>
              <g class="pr__note">
                <text x="24" y="56" font-family="Caveat, 'Comic Sans MS', cursive" font-size="30" fill="#3b57b8">chick, blue hat,</text>
                <text x="24" y="90" font-family="Caveat, 'Comic Sans MS', cursive" font-size="30" fill="#3b57b8">reading a big book!</text>
                <path d="M170 104 C220 130 240 150 262 176" fill="none" stroke="#3b57b8" stroke-width="2.4" stroke-linecap="round"/><path d="M262 176 l-14 -4 m14 4 l-2 -15" fill="none" stroke="#3b57b8" stroke-width="2.4" stroke-linecap="round"/>
              </g>

              <!-- 4 · highlights and sparkles -->
              <g class="pr__hi">
                <ellipse cx="258" cy="168" rx="26" ry="10" fill="#fff" opacity=".55" transform="rotate(-24 258 168)"/>
                <ellipse cx="236" cy="338" rx="16" ry="38" fill="#fff" opacity=".4" transform="rotate(14 236 338)"/>
                <circle cx="271" cy="239" r="4" fill="#fff"/><circle cx="339" cy="239" r="4" fill="#fff"/>
                <path class="pr__sp pr__sp--1" d="M470 250 l6 18 l18 6 l-18 6 l-6 18 l-6 -18 l-18 -6 l18 -6Z" fill="#fff6a8"/>
                <path class="pr__sp pr__sp--2" d="M110 300 l4 12 l12 4 l-12 4 l-4 12 l-4 -12 l-12 -4 l12 -4Z" fill="#fff"/>
                <path class="pr__sp pr__sp--3" d="M420 360 l4 10 l10 4 l-10 4 l-4 10 l-4 -10 l-10 -4 l10 -4Z" fill="#fff6a8"/>
              </g>
            </svg>
            <div class="pr__badge" aria-live="polite"><span class="pr__badge-n">1</span><span class="pr__badge-t"><?= $e($pr['steps'][0][2]) ?></span></div>
            <div class="pr__bar" aria-hidden="true"><i></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
