<?php
require_once "config/database.php";
echo "<br>";
$id = 1;
$sql = "SELECT * FROM categories WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
// Gửi thực thi truy vấn
$result = mysqli_stmt_get_result($stmt);
// mysqli_fetch_assoc : Lấy từng row từ kết quả
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " - " . $row["cat_title"] . "<br>";
}
// $row : một row dữ liệu
?>