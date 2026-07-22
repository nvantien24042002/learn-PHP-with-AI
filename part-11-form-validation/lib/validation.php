<?php
function is_username($username) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    return (bool) preg_match($pattern, $username);
}

function is_password($password) {
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    return (bool) preg_match($pattern, $password);
}

function is_email($email) {
    $pattern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    return (bool) preg_match($pattern, $email);
}

function set_value($label_field) {
    global $$label_field;
    if (isset($$label_field)) {
        $value = $$label_field;
        echo htmlspecialchars($value);
    }
}

function form_error($label_field) {
    global $error;
    if (isset($error[$label_field])) {
        echo "<span style=\"color:red;\">{$error[$label_field]}</span><br/>";
    }
}