<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "Trang chủ";
echo "<br>";
if(!isset($_SESSION['is_login'])){
    header("Location: login.php");
}else{
    echo $_SESSION['user_login'];
}
?>
<br>
<a href="logout.php">Đăng xuất</a>