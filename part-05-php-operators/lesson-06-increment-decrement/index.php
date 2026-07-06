<?php

$x = 0;
echo "x = {$x}"; // Kết quả: x = 0

// Dòng quan trọng: $t = $x-- + 5;
$t = $x-- + 5; 
echo "t = {$t}";
echo "<br>";
echo $x;
$a = 10;
$b = $a++; // $b = 10 (vì lấy giá trị trước), sau đó $a mới thành 11

$c = 10;
$d = ++$c; // $c thành 11 trước, sau đó mới gán vào $d, nên $d = 11
?>