<?php
$product = array(
    1 =>array(
        'id'=>1,
        'name'=>'Laptop Dell',
        'category'=>"electronics",
    ),
    2 => array(
        'id'=>2,
        'name'=>'Áo thun',
        'category'=>"clothing",
    ),
    4 => array(
        'id'=>4,
        'name'=>'Quần Jean',
        'category'=>"clothing",
    ),
    3 => array(
        'id'=>3,
        'name'=>'C++ Programming Language',
        'category'=>"book",
    ),
    5 => array(
        'id'=>5,
        'name'=>'Laravel',
        'category'=>"book",
    ),
);
$selected_category = $_GET['category'] ?? 'ALL';

foreach ($product as $item) {
    if ($selected_category == 'ALL' || $item['category'] == $selected_category) {
        echo "<li>" . $item['name'] . "</li>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lọc sản phầm bằng GET Method</title>
</head>
<body>
    <div class="category">
        <a href="?category=ALL">Tất cả</a>
        <a href="?category=electronics">Electronics</a>
        <a href="?category=clothing">Clothing</a>
        <a href="?category=book">book</a>
    </div>
</body>
</html>