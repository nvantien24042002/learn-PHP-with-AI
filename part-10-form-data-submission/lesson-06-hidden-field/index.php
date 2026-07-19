<?php
$message = '';
if (isset($_POST['btn_submit'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    if (!empty($product_name)) {
        $message = "Đã cập nhật sản phẩm có ID: <b>" . htmlspecialchars($product_id) . "</b> thành công! Tên mới: <b>" . htmlspecialchars($product_name) . "</b>";
    } else {
        $message = "Vui lòng nhập tên sản phẩm.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get form data from hidden field</title>
</head>
<body>
    <h2>Cập nhật sản phẩm</h2>
    <p><?php echo $message; ?></p>
    <form action="" method="post">
        <input type="hidden" name="product_id" value="5">
        <input type="text" name="product_name" placeholder="Tên sản phẩm" id="">
        <button type="submit" name="btn_submit">Cập nhật</button>
    </form>
</body>
</html>