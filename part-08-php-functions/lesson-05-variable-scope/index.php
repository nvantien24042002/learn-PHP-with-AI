<?php
$a = 10;
$b = 50;

function sum() {
    global $a, $b; // Khai báo rõ ràng muốn dùng biến toàn cục
    return $a + $b;
}

echo sum(); // Kết quả vẫn là 60
?>