<?php
session_start();
// 1. Kiểm tra nếu chưa có Session nhưng lại có Cookie "Ghi nhớ đăng nhập"
if (!isset($_SESSION['is_login']) && isset($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}
// 2 Kiểm tra bảo mật: Nếu chưa đăng nhập thì đẩy về login
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit();
}
require './lib/header.php';
?>
<!-- Menu điều hướng -->
<div class="menu">
    <a href="index.php">Trang chủ</a>
    <a href="profile.php">Thông tin cá nhân</a>
    <a href="logout.php">Đăng xuất</a>
</div>
<h1>Trang chủ hệ thống</h1>
<p>Xin chào <strong><?php echo $_SESSION['user_login'] ?></strong> đã quay trở lại</p>

<?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
require './lib/footer.php';
?>