<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['message'])) {
        $message = $_POST['message'];
        echo "You said: " . htmlspecialchars($message);
    } else {
        echo "Bạn chưa nhập nội dung gì cả";
    }
} else {
    echo "No data submitted yet";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="message" id="">
        <input type="submit" value="Send">
    </form>
</body>
</html>