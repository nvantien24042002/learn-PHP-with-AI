<?php
$username = '';
$error = array();
if (isset($_POST['btn_login'])) {
    if(!empty($_POST['username'])){
        $username = $_POST['username'];
    }else{
        $error['username'] = "Bạn không được để trống Username";
    }
    if(!empty($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $error['password'] = "Bạn không được để trống Password";
    }
    if (count($error) == 0) {
        echo "Đăng nhập thành công Username: ".htmlspecialchars($username);
    }else{
        foreach($error as $err){
            echo $err . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập tổng hợp phần 10</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="" method="post">
        <label for="username">Username</label><br><br>
        <input type="text" value="<?php echo htmlspecialchars($username ?? ''); ?>" name="username" id="username"><br>
        <?php if (isset($error['username'])){ ?>
            <p style="color: red;"><?php echo $error['username']; ?></p>
        <?php } ?>
        <label for="password">Password</label><br><br>
        <input type="password" name="password" id="password"><br><br>
        <?php if (isset($error['password'])){ ?>
            <p style="color: red;"><?php echo $error['password']; ?></p>
        <?php } ?>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>