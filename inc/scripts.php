<script src="assets/vendor/lottie_light.min.js"></script>
<script src="main.js?v=<?= filemtime(dirname(__DIR__) . '/main.js') ?>"></script>
<?php foreach (($js ?? []) as $file): ?>
<script src="<?= $file ?>?v=<?= filemtime(dirname(__DIR__) . '/' . $file) ?>"></script>
<?php endforeach ?>
