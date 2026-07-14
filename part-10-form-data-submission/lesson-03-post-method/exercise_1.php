<?php
if(isset($_POST['message'])){
    $message = $_POST['message'];
    echo "You said: ".htmlspecialchars($message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="message" id="">
        <input type="submit" value="Send">
    </form>
</body>
</html>