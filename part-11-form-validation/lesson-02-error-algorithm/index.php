<?php
/*
Thuật toán đặt cờ hiệu:
B1: Phất cờ
    Mặc định hệ thống không có lỗi 
    Thiết lập giá trị mặc định 
    $error = 0;
    $error = false;
    $error = array();
B2: Hạ cờ
    Hạ cờ khi xảy ra phủ định với giả thuyết bài toán 
    Biến lưu lỗi được cập nhật giá trị 1 hoặc true
    Cập nhật thêm giá trị cho mảng lưu lỗi 
    $error = 1;
    $error = true;
    $error['username'] = "Không được để trống trường này";
B3: Kết luận
    Là bước kiểm tra và đưa ra kết luận về tình trạng lỗi thông qua giá trị của cờ
    Giúp hệ thống xử lý theo các tình huống khác nhau 
        Nếu cờ vẫn phất => Hệ thống không có lỗi => Xử lý 
        Nếu cờ hạ => Hệ thống xảy ra lỗi => Thông báo người dùng
    if (empty($error)) {
        // Xử lý khi không có lỗi 
    }else{
        // Thông báo lỗi
    }
 */

    if (empty($error)) {
        // Xử lý khi không có lỗi 
    }else{
        // Thông báo lỗi
    }
?>