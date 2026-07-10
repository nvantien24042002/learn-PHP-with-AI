<?php
//Exericse_1 Check is number odd/even
// function check_Even($n){
//     if($n % 2 == 0){
//         echo "{$n} is number even";
//     }else{
//         echo "{$n} is number odd";
//     }
// }


function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
function check_Even($n){
    if($n % 2 == 0){
        return true;
    }return false;
}
$result =  check_Even(1);
echo $result;
echo "<br>";
// Exercise_2 Check is number prime
function check_prime($n){
    if ($n < 2) return false;
    for($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0) return false;
    }
    return true;
}
echo check_prime(7);
// Exercise_2 Calculte Total numbers is prime
function total_prime($a){
    $t = 0;
    foreach($a as $item){
        if(check_prime($item)){
            $t+=$item;
        }
    }
    return $t;
}
// $a = array(2,3,5,7,11,9);
$a = array(1,9,8,2,1);
echo "Total prime is: " . total_prime($a);


$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Văn Cương',
        'email' => 'phancuong.qt@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Hoàng Anh',
        'email' => 'hoanganh@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Nguyễn Văn Tiến',
        'email' => 'nguyenvantienthuaan@gmail.com'
    )
);

function get_list_post_by_id($id){
    global $list_users;
    foreach($list_users as $item){
        if($item['id'] === $id){
            return $item;
        }
    }
    return null;
}

$test = get_list_post_by_id(2);
show_array($test);
?>