<?php
session_start();

// 1. Kiểm tra nếu chưa có Session nhưng lại có Cookie "Ghi nhớ đăng nhập" thì đồng bộ lại
if (!isset($_SESSION['is_login']) && isset($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

// 2. Kiểm tra bảo mật: Nếu chưa đăng nhập thì bắt buộc đá về login.php
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit();
}

require './lib/header.php';
?>

<div class="menu">
    <a href="index.php">Trang chủ</a>
    <a href="profile.php">Thông tin cá nhân</a>
    <a href="logout.php">Đăng xuất</a>
</div>

<h1>Trang thông tin cá nhân</h1>
<p>Chào mừng bạn đến với trang quản lý tài khoản cá nhân.</p>

<ul style="line-height: 1.8;">
    <li><strong>Tên hiển thị:</strong> <?php echo $_SESSION['user_login']; ?></li>
    <li><strong>Tên đăng nhập hệ thống:</strong> tien2404_02</li>
    <li><strong>Email:</strong> tien2404@gmail.com</li>
    <li><strong>Ngày tham gia:</strong> 24/07/2026</li>
</ul>

<?php
require './lib/footer.php';
?>