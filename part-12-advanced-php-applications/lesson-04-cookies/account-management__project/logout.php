<?php
session_start();
$_SESSION = array();
// Nếu muốn hủy hoàn toàn session trên server, hãy xóa cả cookie session (PHPSESSID)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Hủy phiên làm việc của session trên server
session_destroy();
// Xóa cookies
if (isset($_COOKIE['is_login'])) {
    setcookie('is_login', '', time() - 3600, "/");
}
if (isset($_COOKIE['user_login'])) {
    setcookie('user_login', '', time() - 3600, "/");
}
header("Location: login.php");
exit();
?>