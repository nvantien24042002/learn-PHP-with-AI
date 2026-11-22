<?php
header("Content-Type: application/json; charset=utf-8");

$num_order = filter_input(INPUT_POST, "num_order", FILTER_VALIDATE_INT);
$price     = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);

// Kiểm tra số lượng hợp lệ: phải là số nguyên từ 0 đến 20
if ($num_order === false || $num_order === null || $num_order < 0 || $num_order > 20) {
    echo json_encode([
        "status"  => "error",
        "message" => "Số lượng phải từ 0 đến 20"
    ]);
    exit;
}

// Tính tổng
$total = $price * $num_order;

echo json_encode([
    "status" => "success",
    "total"  => $total
]);