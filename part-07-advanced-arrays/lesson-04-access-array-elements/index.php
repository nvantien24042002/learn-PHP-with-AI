<?php
$infor = array(
    'id'=>1,
    'fullname'=>"Nguyen Van Tien",
    'email'=>"nguyenvantienthuanan12b3@gmail.com",
);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lấy dữ liệu</title>
</head>
<body>
    <p>Id: <strong><?php echo $infor['id']; ?></strong></p>
    <p>Họ và tên: <strong><?php echo $infor['fullname']; ?></strong></p>
    <p>Email: <strong><?php echo $infor['email']; ?></strong></p>
</body>
</html>