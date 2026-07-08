<?php
function sum($a,$b){
    return $a + $b;
}
echo sum(1,2);

function calculateRectangleArea($length, $width) {
    return $length * $width;
}
echo "<br>";
// Bài tập 2 : Kiểm tra tính chẵn lẽ
$n = 3;
echo ($n % 2 == 0) ? "$n là số chẵn" : "$n là số lẻ";
echo "<br>";
echo calculateRectangleArea(2,5);
?>