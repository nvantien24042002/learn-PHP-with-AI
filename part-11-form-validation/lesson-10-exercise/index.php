<?php
require 'lib/validation.php';
$fullname = '';
$username = '';
$phone = '';
$error = array();
if (isset($_POST['btn_login'])) {
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không để trống trường này";
    }else {
        $fullname = $_POST['fullname'];
        // echo $fullname;
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống trường Username";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Username yêu cầu ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6 đến 32 ký tự";
        } else {
            $username = $_POST['username'];
        }
    }
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
    if (empty($_POST['phone'])) {
        $error['phone'] = "Không được để trống trường Số điện thoại";
    } else {
        if (!is_phone($_POST['phone'])) {
            $error['phone'] = "Số điện thoại không đúng định dạng (phải bắt đầu bằng số 0 và có 10 chữ số)";
        } else {
            $phone = $_POST['phone'];
        }
    }

    if(empty($error)){
        echo "Đăng ký thành công !<br>";
        echo "Họ tên: {$fullname} <br> Username: {$username} <br> SĐT: {$phone}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng nhập</title>
</head>
<body>
    <form action="" method="post">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname"><br>
        <?php form_error('fullname'); ?><br>
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"><br>
        <?php form_error('username'); ?><br>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password"><br>
        <?php form_error('password'); ?><br>
        <label for="phone">Số điện thoại</label><br>
        <input type="tel" name="phone" id="phone"><br>
        <?php form_error('phone'); ?><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>