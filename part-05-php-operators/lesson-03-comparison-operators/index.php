<?php
$x = 10;
$y = 5;

// Kiểm tra không bằng
if ($x != $y) {
    echo "x khác y <br>";
}

// Kiểm tra lớn hơn
if ($x > $y) {
    echo "x lớn hơn y <br>";
}

// Kiểm tra nhỏ hơn hoặc bằng
if ($y <= $x) {
    echo "y nhỏ hơn hoặc bằng x <br>";
}

// Lưu ý quan trọng về kiểu dữ liệu (== vs ===)
$a = 10;     // kiểu số nguyên (integer)
$b = "10";   // kiểu chuỗi (string)

if ($a == $b) {
    echo "a và b bằng nhau về giá trị <br>";
}

if ($a !== $b) {
    echo "a và b không giống hệt nhau về kiểu dữ liệu <br>";
}
?>