<?php
// Báo cho trình duyệt biết file này trả về JSON
header("Content-Type: application/json; charset=utf-8");
// Lấy số người dùng gửi lên (chưa có thì gán chuỗi rỗng)
$so = $_POST["so"] ?? "";

// Kiểm tra: nếu KHÔNG phải số thì báo lỗi và dừng
if (!is_numeric($so)) {
    echo json_encode([
        "status"  => "error",
        "message" => "Vui lòng nhập một số hợp lệ"
    ]);
    exit;
}

// Ép chuỗi sang số thực để tính được cả số thập phân
$so = (float) $so;

// Trả kết quả về dạng JSON
echo json_encode([
    "status"      => "success",
    "so"          => $so,
    "binh_phuong" => $so * $so,
    "lap_phuong" => $so * $so * $so * $so
]);