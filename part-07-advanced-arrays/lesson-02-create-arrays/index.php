<?php
// Tạo mảng rỗng 
$error = array();
$error['username'] = "Bạn không được để trống trường này";
// Tạo mảng với key mặc định
$list_odd = array(1,3,5,7);
// Tạo mảng với key xác định 
$infor = array(
    'id'=>1,
    'fullname'=>"Nguyen Van Tien",
    'email'=>'nguyenvantienthuanan12b3@gmail.com',
);
// echo "<pre>";
// print_r($list_odd);
// echo "</pre>";

echo "<pre>";
print_r($infor);
echo "</pre>";

?>