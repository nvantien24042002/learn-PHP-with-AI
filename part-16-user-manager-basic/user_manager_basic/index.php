<?php
session_start();
ob_start();
$page = $_GET['page'] ?? 'home';
$path = __DIR__ . "/pages/{$page}.php";
$content = file_exists($path) ? $path : __DIR__ . "/pages/404.php";
require 'data/users.php';
require 'lib/template.php';
require 'lib/validation.php';
require 'lib/users.php';
require 'lib/url.php';
if (!is_login() && isset($_COOKIE['remember_me'])) {
    $username = $_COOKIE['remember_me'];
    // Khôi phục Session
    $_SESSION['is_login'] = true;
    $_SESSION['user_login'] = $username;
}
if (!is_login() && $page != 'login') {
    header("Location: ?page=login");
    exit;
}
?>
<div id="content">
    <?php require $content; ?>
</div>
