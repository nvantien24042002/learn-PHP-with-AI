<?php

use GuzzleHttp\Psr7\Header;

if(isset($_POST['btn-login'])){
    $error = array();
    // username
    if (empty($_POST['username'])) {
        $error['username'] = "Username cannot be left blank";
    }else{
        if (!is_username($_POST['username'])) {
            $error['username'] = "Username requires letters, numbers, dots, underscores, from 6 to 32 characters";
        } else {
            $username = $_POST['username'];
            echo $username;
        }
    }
    //password
    if (empty($_POST['password'])) {
        $error['password'] = "Password cannot be left blank";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Password must start with an uppercase letter, contain letters, numbers, or special characters, from 6 to 32 characters";
        }else {
            $password = $_POST['password'];
        }
    }
    if(empty($error)){
        if(check_login($username,$password)){
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            redirect_to('?page=home');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div id="wp-form-login">
            <h1>LOGIN</h1>
            <form method="post">
                <div class="form-group">
                    <input type="text" name="username" value="" placeholder="Username" />
                    <?php form_error('username'); ?><br>
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="" placeholder="Password" />
                    <?php form_error('password'); ?><br>
                </div>
                <input type="submit" class="btn-login" name="btn-login" value="Sign In" />
            </form>
            <a href="">Forgot Password?</a>
    </div>
</body>
</html>