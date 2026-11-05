<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include __DIR__ . '/seo.php' ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@700&family=Figtree:wght@400;500&family=Caveat:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="assets/favicon.png">
<?php if (!empty($bootstrap)): ?>
<link rel="stylesheet" href="assets/vendor/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/vendor/bootstrap-utilities.min.css">
<?php endif ?>
<link rel="stylesheet" href="style.css?v=<?= filemtime(dirname(__DIR__) . '/style.css') ?>">
<?php foreach (($css ?? []) as $sheet): ?>
<link rel="stylesheet" href="<?= $e($sheet) ?>?v=<?= filemtime(dirname(__DIR__) . '/' . $sheet) ?>">
<?php endforeach ?>
<link rel="stylesheet" href="seo.css?v=<?= filemtime(dirname(__DIR__) . '/seo.css') ?>">
<script>document.documentElement.classList.add('js')</script>
</head>
<body>
<main>