<?php
// Bước 1:  Xây dựng giao diện
// Bước 2: Chuẩn bị dữ liệu => Tạo biến 
// Bước 3: Đổ dữ liệu php lên html
$fullname = "Nguyen Van Tien";
$username = "tiennguyen";
$email = "nguyenvantienthuanan12b3@gmail.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 6: Hiển thị thông tin cá nhân</title>
</head>
<body>
    <h1>Thông tin cá nhân</h1>
    <p>Họ và tên <strong><?php echo $fullname;?></strong></p>
    <p>Username <strong><?php echo $username;?></strong></p>
    <p>Email <strong><?php echo $email;?></strong></p>
</body>
</html>