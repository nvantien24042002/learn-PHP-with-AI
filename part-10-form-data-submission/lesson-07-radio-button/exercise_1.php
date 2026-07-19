<?php
if(isset($_POST['btn_submit'])){
    $rating = $_POST['rating'] ?? '';
    if ($rating == '') {
        echo "Vui lòng chọn 1 đánh giá.";
    } else {
        echo "Bạn đã đánh giá: " . htmlspecialchars($rating);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khảo sát mức độ hài lòng</title>
</head>
<body>
    <form action="" method="post">
        <input type="radio" name="rating" id="" value="Rất tốt"> Rất tốt
        <input type="radio" name="rating" id="" value="Tốt"> Tốt
        <input type="radio" name="rating" id="" value="Bình thường"> Bình thường
        <input type="radio" name="rating" id="" value="Tệ"> Tệ
        <button type="submit" name="btn_submit">Gửi đánh giá</button>
    </form>
</body>
</html>