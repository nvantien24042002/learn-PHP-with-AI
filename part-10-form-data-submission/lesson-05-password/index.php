<?php
if(isset($_POST['btn_login'])){
    if(empty($_POST['username'])){
        echo "This field must not be left blank.";
    }else {
        $username = $_POST['username'];
        echo htmlspecialchars($username);
    }
    if(empty($_POST['password'])){
        echo "This field must not be left blank.";
    }else {
        $password = $_POST['password'];
        echo password_hash($password,PASSWORD_DEFAULT);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get form data from password</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>
</html>