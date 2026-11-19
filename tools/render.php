<?php
// Renders one page to stdout for the static export: php tools/render.php <page.php> [slug]
chdir(dirname(__DIR__));
$_SERVER['HTTP_HOST'] = $argv[3] ?? 'fablenestpublishers.com';
$_SERVER['HTTPS'] = 'on';
$_SERVER['SCRIPT_NAME'] = '/' . $argv[1];
$_SERVER['REQUEST_METHOD'] = 'GET';
if (!empty($argv[2])) $_GET['s'] = $argv[2];
include $argv[1];
