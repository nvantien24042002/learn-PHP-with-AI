<?php
require './lib/validation.php';
session_start();
ob_start();
$username = '';
$error = array(); // Phất cờ
if (isset($_POST['btn_login'])) {
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
    // Kết luận
    if (empty($error)) {
        $data = array(
            'username'=>'tien2404_02',
            'password'=>'Tien!@#',
        );
        if ($username == $data['username'] && $password == $data['password']) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'tiennguyen';
            // Xử lý cookies
            if (isset($_POST['remember_me'])) {
                // Thiết lập Cookie tồn tại trong vòng 7 ngày (7 * 24 * 60 * 60 giây)
                setcookie('is_login', true, time() + 3600, "/");
                setcookie('user_login', 'tiennguyen', time() + 3600, "/");
            }
            header("Location: index.php");
            exit();
        }else{
            $error['login'] = "Username và Password không đúng";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chuẩn hóa dữ liệu Form đăng nhập</title>
    <style>
        p.error { color: red; }
    </style>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php set_value('username') ?>" autocomplete="off" /><br>
        <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" /><br>
        <p class="error"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
        <br>
        <!-- Ghi nhớ đăng nhập -->
        <input type="checkbox" name="remember_me" id="remember_me" value="yes">
        <label for="remember_me">Ghi nhớ đăng nhập</label><br><br>
        <input type="submit" name="btn_login" value="Login"/>
    </form>
</body>
</html>