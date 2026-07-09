<?php
function sum($a,$b){
    return $a + $b;
}
function sum_multi_number() {
    // echo func_num_args();
    // func_get_args() trả về một mảng chứa tất cả các đối số
    // $a = func_get_arg(0);
    // $b = func_get_arg(1);
    // echo "a = {$a} <br> b = {$b}";
    $list_args = func_get_args();
    $t = 0;
    foreach ($list_args as $value) {
        $t += $value;
    }
    echo $t;
}
sum_multi_number(2, 5);
?>