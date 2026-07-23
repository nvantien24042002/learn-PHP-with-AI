<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
if (isset($_COOKIE['is_login'])) {
    setcookie('is_login', '', time() - 3600, "/");
}
if (isset($_COOKIE['user_login'])) {
    setcookie('user_login', '', time() - 3600, "/");
}
header("Location: login.php");
exit();
?>