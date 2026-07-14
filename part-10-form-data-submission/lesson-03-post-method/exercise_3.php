<?php
$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Lỗi: Không thể chia cho 0!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Phép tính không hợp lệ.";
        }
    } else {
        $result = "Vui lòng nhập số hợp lệ vào các ô!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Máy tính đơn giản</h2>
    
    <form action="" method="post">
        <input type="number" name="num1" step="any" placeholder="Số thứ nhất" required>
        
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <input type="number" name="num2" step="any" placeholder="Số thứ hai" required>
        
        <input type="submit" value="Tính">
    </form>

    <?php 
    // Hiển thị kết quả nếu đã có dữ liệu
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h3>Kết quả: $result</h3>";
    }
    ?>
</body>
</html>