<?php
session_start();
// Kiểm tra nếu chưa có Session nhưng lại có Cookie "Ghi nhớ đăng nhập"
if (!isset($_SESSION['is_login']) && isset($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "Trang chủ";
echo "<br>";

// Kiểm tra lại lần nữa sau khi đã đồng bộ từ Cookie sang Session
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit();
} else {
    echo "Xin chào: " . $_SESSION['user_login'];
}
?>
<br>
<a href="logout.php">Đăng xuất</a>