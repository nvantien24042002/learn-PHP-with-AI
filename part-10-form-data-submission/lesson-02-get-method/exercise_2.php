<?php
if (isset($_GET['id'])) {
    $id =(int)$_GET['id'];
    echo "Showing item # " . htmlspecialchars($id);
} else {
    echo "Please click an item to see details.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plain links with GET</title>
</head>
<body>
    <a href="?id=1">Item 1</a>
    <a href="?id=2">Item 2</a>
    <a href="?id=3">Item 3</a>
</body>
</html>