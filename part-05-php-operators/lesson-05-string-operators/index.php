<?php
$notifi = "Xin chào ";
$username = "<strong>admin</strong>";

echo "notifi = {$notifi} <br>";
echo "username = {$username} <br>";
echo "<br>--------------------<br>";

// Sử dụng toán tử nối chuỗi gán (.=)
$notifi .= $username; 
// Dòng trên tương đương với: $notifi = $notifi . $username;

echo $notifi;
?>