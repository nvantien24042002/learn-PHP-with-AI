<?php

// =========================
// Bước 1: Kiểm tra submit
// =========================

if (!empty($_FILES['image']['name'])) {

    // =========================
    // Bước 2: Lấy thông tin file
    // =========================

    $tmpName = $_FILES['image']['tmp_name'];

    $fileName = $_FILES['image']['name'];

    $uploadDir = "uploads/";

    // =========================
    // Bước 3: Tách tên file
    // =========================

    $fileInfo = pathinfo($fileName);

    $fileBaseName = $fileInfo['filename'];

    $fileExtension = $fileInfo['extension'];

    // =========================
    // Bước 4: Chuẩn bị tên file mới
    // =========================

    $newFileName = $fileName;

    $count = 1;

    // =========================
    // Bước 5: Kiểm tra trùng tên
    // =========================

    while (file_exists($uploadDir . $newFileName)) {

        $newFileName = $fileBaseName . "-" . $count . "." . $fileExtension;

        $count++;
    }

    // =========================
    // Bước 6: Upload file
    // =========================

    $destination = $uploadDir . $newFileName;

    if (move_uploaded_file($tmpName, $destination)) {

        echo "Upload thành công: " . $newFileName;

    } else {

        echo "Upload thất bại!";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Lesson 05 - Rename File</title>

</head>

<body>

<h2>Upload Image</h2>

<form action="" method="POST" enctype="multipart/form-data">

    <input type="file" name="image">

    <br><br>

    <button type="submit">
        Upload
    </button>

</form>

</body>
</html>