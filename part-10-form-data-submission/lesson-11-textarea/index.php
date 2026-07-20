<?php
$message = '';
if(isset($_POST['btm_submit'])){
    $message = $_POST['message']?? '' ;
    echo htmlspecialchars($message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data form textarea form</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="message" rows="5" cols="40" id=""><?php echo htmlspecialchars($message); ?></textarea>
        <input type="submit" value="Gửi" name="btm_submit">
    </form>
</body>
</html>