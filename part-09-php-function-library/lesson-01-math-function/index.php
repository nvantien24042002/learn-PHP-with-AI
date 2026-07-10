<?php
// function abs()
echo abs(-4.2); // 4.2
echo "<br>";
var_dump(abs(-4.2)); //float(4.2)
// function max() - max — Find highest value
echo "<br>";
// $findNumberMax = array(2,3,1,6,7);
$findNumberMax = array(2, 4, 5);
echo max($findNumberMax);
echo "<br>";
echo max('hello', -1);
// With multiple arrays of different lengths, max returns the longest
$val = max(array(2, 2, 2), array(1, 1, 1, 1)); // array(1, 1, 1, 1)
// var_dump($val);
// Multiple arrays of the same length are compared from left to right
// so in our example: 2 == 2, but 5 > 4
$val = max(array(2, 4, 8), array(2, 5, 1)); // array(2, 5, 1)
// var_dump($val);
// function ceil()
// echo ceil(-1.2);
// echo floor(2.1);
// echo floor(-3.14);
// function round() — Rounds a float
echo round(3.4);
echo "<br>";
echo rand(1,100);
?>