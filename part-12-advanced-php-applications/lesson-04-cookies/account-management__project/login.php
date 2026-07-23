<?php
require './lib/validation.php';
session_start();
ob_start();

$username = '';
$error = array(); 

// 1. Nếu đã có Cookie "Ghi nhớ đăng nhập" thì tự động khôi phục Session và chuyển thẳng vào index.php
if (!isset($_SESSION['is_login']) && isset($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
    header("Location: index.php");
    exit();
}

// Nếu đã đăng nhập rồi thì khỏi cần vào trang login nữa, đá thẳng về index.php
if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true) {
    header("Location: index.php");
    exit();
}

// 2. Xử lý khi người dùng bấm nút Login
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
        $error['password'] = "Không được để trống trường Password";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Password phải bắt đầu bằng chữ hoa, chứa chữ cái, chữ số hoặc ký tự đặc biệt, từ 6 đến 32 ký tự";
        } else {
            $password = $_POST['password'];
        }
    }

    // Kết luận validate
    if (empty($error)) {
        $data = array(
            'username' => 'tien2404_02',
            'password' => 'Tien!@#',
        );
                if ($username == $data['username'] && $password == $data['password']) {
            
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'tiennguyen';

            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + (86400 * 7), "/"); // Tồn tại 7 ngày
                setcookie('user_login', 'tiennguyen', time() + (86400 * 7), "/");
            }

            header("Location: index.php");
            exit();
        } else {
            $error['login'] = "Username hoặc Password không đúng";
        }
    }
}

require './lib/header.php';
?>

    <h1>Đăng nhập hệ thống</h1>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php set_value('username'); ?>" autocomplete="off" /><br>
        <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" /><br>
        <p class="error"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
        <br>

        <!-- Checkbox Remember Me -->
        <input type="checkbox" name="remember_me" id="remember_me" value="yes">
        <label for="remember_me">Ghi nhớ đăng nhập</label><br><br>
        
        <input type="submit" name="btn_login" value="Login"/>
        <p class="error"><?php if (!empty($error['login'])) echo $error['login']; ?></p>
    </form>

<?php
// Nhúng phần Footer dùng chung
require './lib/footer.php';
?>