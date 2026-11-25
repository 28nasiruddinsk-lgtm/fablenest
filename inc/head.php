<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="only light">
<?php include __DIR__ . '/seo.php' ?>
<link rel="preconnect" href="https://api.fontshare.com">
<link rel="preconnect" href="https://cdn.fontshare.com" crossorigin>
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon.png">
<link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
<?php if (!empty($bootstrap)): ?>
<link rel="stylesheet" href="assets/vendor/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/vendor/bootstrap-utilities.min.css">
<?php endif ?>
<link rel="stylesheet" href="style.css?v=<?= filemtime(dirname(__DIR__) . '/style.css') ?>">
<?php foreach (($css ?? []) as $sheet): ?>
<link rel="stylesheet" href="<?= $e($sheet) ?>?v=<?= filemtime(dirname(__DIR__) . '/' . $sheet) ?>">
<?php endforeach ?>
<link rel="stylesheet" href="seo.css?v=<?= filemtime(dirname(__DIR__) . '/seo.css') ?>">
<link rel="stylesheet" href="mobile.css?v=<?= filemtime(dirname(__DIR__) . '/mobile.css') ?>">
<script>document.documentElement.classList.add('js')</script>
</head>
<body>
<main>