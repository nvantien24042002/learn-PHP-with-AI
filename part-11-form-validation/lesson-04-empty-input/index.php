<?php
if (isset($_POST['btn_login'])) {
    // B1 : 
    $error = array(); //Phất cờ
    $username = '';
    $password = '';
    if (empty($_POST['username'])) {
        $error['username'] = "Username cannot be left blank."; //Hạ cờ
    }else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Password cannot be left blank.."; //Hạ cờ
    }else {
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    }
    // Kết luận
    if (count($error) == 0) {
        // Xử lý không có lỗi
        echo "Username: {$username} - Password: {$password}";
    }else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation form Login</title>
</head>
<body>
    <h3>Login</h3>
    <form action="" method="post">
        <label for="username">Username</label><br><br>
        <input type="text" name="username" id=""><br><br>
        <label for="password">Password</label><br><br>
        <input type="text" name="password" id=""><br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>