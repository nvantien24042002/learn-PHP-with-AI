<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Basic Routing</title>
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <a id="logo">UNITOP</a>
            <div id="user-login">
                <p>Xin chào <strong><?php if(is_login()) echo get_fullname() ?></strong> (<a href="logout.php">Thoát</a>)</p>
            </div>
            <nav>
                <ul id="main-menu">
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=about">About</a></li>
                    <li><a href="?page=news">News</a></li>
                    <li><a href="?page=product">Product</a></li>
                    <li><a href="?page=contact">Contact</a></li>
                </ul>
            </nav>
        </header>