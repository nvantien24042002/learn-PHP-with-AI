<?php
session_start();
require __DIR__ . "/lib/cart.php";
require __DIR__ . "/lib/number.php";
header("Content-Type: application/json; charset=utf-8");

$id  = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$qty = filter_input(INPUT_POST, "qty", FILTER_VALIDATE_INT);

// TODO 1: số lượng phải là số nguyên từ 1 đến 10
// Sai thì trả JSON lỗi + exit
if ($id === false || $id === null || $id <= 0) {
    http_response_code(400);
    echo json_encode([
        "status"  => "error",
        "message" => "ID sản phẩm không hợp lệ.",
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
if ($qty === false || $qty === null || $qty < 1 || $qty > 10) {
    http_response_code(400);
    echo json_encode([
        "ok" => false,
        "message" => "Số lượng phải là số nguyên từ 1 đến 10.",
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO 2: sản phẩm phải đang có trong giỏ hàng
// Không có thì trả JSON lỗi + exit
if (!isset($_SESSION['cart']['buy'][$id])) {
    http_response_code(404);
    echo json_encode([
        "status"  => "error",
        "message" => "Sản phẩm không có trong giỏ hàng.",
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
// Cập nhật giỏ hàng bằng hàm có sẵn trong lib/cart.php
update_cart([$id => $qty]);

// TODO 3: trả JSON kết quả
echo json_encode([
    "status"    => "success",
    "sub_total" => format_price($_SESSION['cart']['buy'][$id]['sub_total']),
    "total"     => format_price(get_total_cat()),
    "num_order" => get_num_order_cart(),
], JSON_UNESCAPED_UNICODE);