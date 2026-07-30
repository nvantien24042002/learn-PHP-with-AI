<?php
// Mảng lưu trữ user
/** * Thông tin users
 * Id
 * Họ và tên
 * Tên đăng nhập
 * Mật khẩu
 * Email
 */
$list_users = array(
    1=>array(
        'id'=>1,
        'fullname'=>'Nguyễn Văn Tiến',
        'username'=>'Tiennguyen24',
        'password'=>password_hash('Tien24@',PASSWORD_DEFAULT),
        'email'=>'nguyenvantien123@gmail.com',
    )
)

?>