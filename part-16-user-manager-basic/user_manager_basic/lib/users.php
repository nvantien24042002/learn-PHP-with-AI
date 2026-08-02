<?php
function check_login($username, $password) {
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user['username'] && password_verify($password, $user['password'])) {
            return TRUE;
        }
    }
    return FALSE;
}
function is_login() {
    if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) {
        return true;
    }
    return false;
}

// 2. Hàm trả về username hoặc thông tin của user đang đăng nhập
function user_login() {
    if (is_login() && isset($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
    return false;
}
function get_fullname() {
    global $list_users;
    if (is_login()) {
        $username_current = user_login();
        foreach ($list_users as $user) {
            if ($user['username'] == $username_current) {
                return $user['fullname'];
            }
        }
    }
    return false;
}
?>