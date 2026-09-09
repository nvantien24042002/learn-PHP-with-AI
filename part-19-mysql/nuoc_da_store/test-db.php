<?php
require_once "config/database.php";
echo "<br>";
$sql = "SELECT * FROM categories WHERE id = 2";
// Gửi thực thi truy vấn
$result = mysqli_query($conn, $sql);
// mysqli_fetch_assoc : Lấy từng row từ kết quả
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " - " . $row["cat_title"] . "<br>";
}
// $row : một row dữ liệu
?>