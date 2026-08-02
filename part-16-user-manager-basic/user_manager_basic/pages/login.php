<?php
require 'lib/validation.php';
if(isset($_POST['btn-login'])){
    $error = array();
    // username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống trường username";
    }else{
        if (!is_username($_POST['username'])) {
            $error['username'] = "Username yêu cầu ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6 đến 32 ký tự";
        } else {
            $username = $_POST['username'];
            echo $username;
        }
    }
    //password
    if (empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "Không được để trống trường Password";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Password phải bắt đầu bằng chữ hoa, chứa chữ cái, chữ số hoặc ký tự đặc biệt, từ 6 đến 32 ký tự";
        }else {
            $password = $_POST['password'];
        }
    }
    if(empty($error)){
        echo "Đăng ký thành công !<br>";
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
    <title>Document</title>
</head>
<body>
    <div id="wp-form-login">
            <h1>ĐĂNG NHẬP</h1>
            <form method="post">
                <div class="form-group">
                    <input type="text" name="username" value="" placeholder="Username" />
                    <?php form_error('username'); ?><br>
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="" placeholder="Password" />
                    <?php form_error('password'); ?><br>
                </div>
                <input type="submit" class="btn-login" name="btn-login" value="Đăng nhập" />
            </form>
            <a href="">Quên Mật Khẩu</a>
    </div>
</body>
</html>