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
?>