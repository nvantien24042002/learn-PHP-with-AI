<?php
header("Content-Type: application/json; charset=utf-8");

// 1. Đổi "num_order" → "qty" cho khớp với data: { price: ..., qty: ... } bên JS
$qty   = filter_input(INPUT_POST, "qty", FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);

// Kiểm tra số lượng: số nguyên từ 0 đến 20
if ($qty === false || $qty === null || $qty < 0 || $qty > 20) {
    echo json_encode([
        "status"  => "error",
        "message" => "Số lượng phải từ 0 đến 20"
    ]);
    exit;
}

// 2. Thêm: kiểm tra giá phải là số nguyên lớn hơn 0
if ($price === false || $price === null || $price <= 0) {
    echo json_encode([
        "status"  => "error",
        "message" => "Giá sản phẩm không hợp lệ"
    ]);
    exit;
}

// 3. Đổi "total" → "subtotal" cho khớp với data.subtotal bên JS
echo json_encode([
    "status"   => "success",
    "subtotal" => $price * $qty
]);