<?php
// 1. Khởi tạo mảng dữ liệu
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
// 2. Thêm phần tử mới vào mảng
$list_users[3] = array(
    'id' => 3,
    'fullname' => 'Lam Trường',
    'email' => 'lamtruong@gmail.com'
);

foreach ($list_users as $info) {
    echo '<p>Id: <strong>' . $info['id'] . '</strong></p>';
    echo '<p>Họ và tên: <strong>' . $info['fullname'] . '</strong></p>';
    echo '<p>Email: <strong>' . $info['email'] . '</strong></p>';
    echo '<hr>'; // Thêm đường kẻ ngang giữa các người dùng cho dễ nhìn
}

// 3. Truy cập phần tử mảng
$info = $list_users[3];
echo "<pre>";
print_r($info);
echo "</pre>";
?>