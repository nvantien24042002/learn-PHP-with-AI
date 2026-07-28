<?php
// require 'lib/data.php';
if (isset($_FILES['file'])) {
    // show_array($_FILES);
    $error = array();
    $upload_dir = 'uploads/';
    
    // Đảm bảo thư mục uploads tồn tại
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    ////Đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];
    
    #Xử lý upload đúng file ảnh
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "Chỉ được upload file có đuôi png, jpg, gif, jpeg";
    } else {
        #Upload file có kích thước cho phép (<20MB ~ 29.000.000 Byte)
        $file_size = $_FILES['file']['size'];
        if ($file_size > 29000000) {
            $error['file_size'] = "Chỉ được upload file bé hơn 20 MB";
        }
    }

    #Kiểm tra trùng file trên hệ thống
    if (file_exists($upload_file)) {
        $error['file_exists'] = "File đã tồn tại trên hệ thống";
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}'><br>";
            echo "<a href='{$upload_file}'>Download: {$_FILES['file']['name']}</a>";
        } else {
            echo "Upload file không thành công";
        }
    } else {
        // show_array($error);
        foreach ($error as $err) {
            echo "<p style='color: red;'>$err</p>";
        }
    }
}
?>

<html>
    <head>
        <title>Upload file ảnh lên server</title>
    </head>
    <body>
        <h1>Upload file</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            <input type="file" name="file" /><br><br>
            <input type="submit" value="Upload file" />
        </form>
    </body>
</html>