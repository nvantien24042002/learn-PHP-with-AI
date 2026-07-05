<?php
$list_user = array(
    1 => array(
        'id'=> 1,
        'fullname'=>'Nguyen Van Tien',
        'username'=>'tiennguyen@gmail.com',
        'phone'=>'0787731781',
    ),
    2 => array(
        'id'=> 1,
        'fullname'=>'Phan Thi The',
        'username'=>'thephanTT',
        'phone'=>'0775541615',
    ),
);

$list_product = array(
    1 => array(
        'id'=> 1,
        'product_title'=>'Sơn xịt ATM Spray Đủ Màu 400ML chính hãng',
        'product_price'=>'48.000₫',
        'product_desc'=>'
        
        ✅ ƯU ĐIỂM VƯỢT TRỘI SƠN XỊT ATM

            - Sơn xịt ATM được đặc chế từ hỗn hợp nhựa N/C và ACRYLIC, có độ bao phủ hơn các loại sơn nước thông thường và tránh tạo các đường sọc không đồng đều như khi dùng chổi quét

            - Sơn phun dạng xịt bay hơi nhanh, sử dụng thuận tiện và rất mau khô

            - Nhờ bản chất dung dịch hòa tan, sơn phun dạng xịt như bình sơn phun ATM có độ bền tốt hơn hẳn so với hầu hết các loại sơn tường khác

        ',
    ),
    2 => array(
        'id'=>2,
        'product_title'=>'Dép D.G Quai Ngang Chữ To Hàng Loại 1 Đủ Chữ 2 lớp, Đủ Size 35-43 Hottrend 2025',
        'product_price'=>'71.680₫',
        'product_desc'=>'
        
        MÔ TẢ SẢN PHẨM
        HÀNG CHUẨN - Bức hình THẬT
        Thông tin nổi bật : 
            • xây đắp dép tiền tiến nhất 
            • Đế dép mang vật tư cao su thiên nhiên đặc đúc cao cấp, bền đẹp
            • Dép mang xu hướng make up mới năng động, tươi tắn 
            • Dễ phối đồ, tiện sử dụng 
            • đáp ứng nhanh, xem hàng trước khi thanh toán.
                Hàng giao tận nơi, khách hàng nhận hàng, xét hàng mới thanh toán. sử dụng thay đổi hàng trong khoảng 7 ngày còn còn nếu không ưng ý. item bh  lên đến mức 1 năm. Được hoàn tiền đến 200% nếu cống phẩm không giống mô tả'
    )
);


$list_infor = array(
    'fullname'=>"Nguyễn Văn Tiến",
    'age'=>'24',
    'dateOfBirth'=> '2002',
    'weight'=>'63kg',
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bâì tập phần 4</title>
</head>
<body>
    <p>Tôi là <?php echo $list_infor['fullname']?>, sinh năm <?php echo $list_infor['dateOfBirth']?>, nặng <?php echo $list_infor['weight']?></p>
</body>
</html>