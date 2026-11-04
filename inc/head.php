<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $e($title) ?> (wireframe)</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@700&family=Figtree:wght@400;500&family=Caveat:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="assets/favicon.png">
<link rel="stylesheet" href="style.css?v=<?= filemtime(dirname(__DIR__) . '/style.css') ?>">
<link rel="stylesheet" href="wire.css?v=<?= filemtime(dirname(__DIR__) . '/wire.css') ?>">
<script>document.documentElement.classList.add('js')</script>
</head>
<body class="wire">
<main>