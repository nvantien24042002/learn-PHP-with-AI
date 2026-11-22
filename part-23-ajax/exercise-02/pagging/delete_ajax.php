<?php
require_once __DIR__ . "/db/bootstrap.php";
header("Content-Type: application/json; charset=utf-8");

// 1. Kiểm tra phải là POST và CSRF token hợp lệ
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !verify_csrf_token($_POST["csrf_token"] ?? null)) {
    http_response_code(403);
    // TODO 1: echo json_encode với status "error" và message "Yêu cầu không hợp lệ"
    echo json_encode([
        "status"  => "error",
        "message" => "Vui lòng nhập một số hợp lệ"
    ]);
    exit;
}
// 2. Kiểm tra id hợp lệ
$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
if (!$id || $id < 1) {
    http_response_code(404);
    echo json_encode(["status" => "error", "message" => "Không tìm thấy sản phẩm"]);
    exit;
}
// 3. Xóa trong database
if (db_delete("products", "id = " . $id) !== 1) {
    http_response_code(404);
    echo json_encode(["status" => "error", "message" => "Không tìm thấy sản phẩm"]);
    exit;
}
// 4 Xóa thảnh công 

echo json_encode([
    "status"  => "error",
    "message" => "Yêu cầu không hợp lệ"
]);
?>