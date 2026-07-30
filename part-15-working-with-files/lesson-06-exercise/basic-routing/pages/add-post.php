<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new post</title>
</head>
<body>
<script>
    CKEDITOR.replace('detail');
</script>
<h1>Thêm bài viết</h1>

<form action="process.php" method="POST" enctype="multipart/form-data">
    <p>
        <label>Tiêu đề bài viết</label><br>
        <input type="text" name="title" style="width:500px;">
    </p>
    <p>
        <label>Mô tả ngắn</label><br>
        <textarea name="summary" rows="5" cols="70"></textarea>
    </p>

    <p>
        <label>Chi tiết bài viết</label><br>
        <textarea name="detail" id="detail" rows="10" cols="70"></textarea>
    </p>
    <p>
        <label>Ảnh đại diện</label><br>
        <input type="file" name="thumbnail">
    </p>
    <p>
        <button type="submit">
            Thêm bài viết
        </button>
    </p>
</form>
<script src="../ckeditor/ckeditor.js"></script>
</body>
</html>