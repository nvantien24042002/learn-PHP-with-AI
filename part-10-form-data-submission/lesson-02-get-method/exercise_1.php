<?php

if(isset($_GET['keyword']) && $_GET['keyword'] !== ''){
    $keyword = $_GET['keyword'] ?? '';
    echo "Your search for: ". $keyword;
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise_1</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="keyword">
        <button type="submit">Search</button>
    </form>
</body>
</html>