<?php
session_start();
ob_start();
$page = $_GET['page'] ?? 'home';
$path = __DIR__ . "/pages/{$page}.php";
$content = file_exists($path) ? $path : __DIR__ . "/pages/errors.php";
require 'data/users.php';
require 'lib/template.php';
require 'lib/validation.php';
require 'lib/users.php';
require 'lib/url.php';
?>
<div id="content">
    <?php require $content; ?>
</div>
