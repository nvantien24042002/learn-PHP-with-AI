<?php
$page = $_GET['page'] ?? 'home';
$path = __DIR__ . "/pages/{$page}.php";
$content = file_exists($path) ? $path : __DIR__ . "/pages/errors.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Routing</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <ul id="main-menu">
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=news">News</a></li>
                <li><a href="?page=product">Product</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>
        <div id="content">
            <?php require $content; ?>
        </div>
        <div id="footer">
            <p>unitop.vn</p>
        </div>
    </div>
</body>
</html>