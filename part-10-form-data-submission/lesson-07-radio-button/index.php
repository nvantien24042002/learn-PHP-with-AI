<?php
if (isset($_POST['btn_submit'])) {
    $gender = $_POST['gender']?? '';
    echo "Giới tính đã chọn là: ". htmlspecialchars($gender);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get form data from Radio button</title>
</head>
<body>
    <form action="" method="post">
            <input type="radio" name="gender" value="male"> Nam<br>
            <input type="radio" name="gender" value="female"> Nữ<br>
            <input type="radio" name="gender" value="other"> Khác<br>
            <button type="submit" name="btn_submit">Send</button>
    </form>
</body>
</html>