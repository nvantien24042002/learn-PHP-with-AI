<?php
if (isset($_POST['btn_add'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form list checkbox</title>
</head>
<body>
    <h1>Chọn danh mục</h1>
    <form action="" method="post">
        <input type="checkbox" name="hobbies[]" value="Đọc sách" id="">Đọc sách
        <input type="checkbox" name="hobbies[]" value="Thể thao" id="">Thể thao
        <input type="checkbox" name="hobbies[]" value="Âm nhạc" id="">Âm nhạc
        <input type="checkbox" name="hobbies[]" value="Xã hội" id="">Xã hội <br>
        <input type="submit" value="Thêm bài viết" name="btn_add">
    </form>
</body>
</html>