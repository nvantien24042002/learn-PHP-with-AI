<?php
require_once __DIR__ . "/db/bootstrap.php";
header("Content-Type: application/json; charset=utf-8");

// Lấy từ khóa, trim() bỏ khoảng trắng thừa ở 2 đầu
$keyword = trim($_GET["keyword"] ?? "");

// TODO 1: "làm sạch" từ khóa bằng hàm escape_string(), lưu vào biến $safe_keyword
$safe_keyword = escape_string($keyword);
// TODO 2: viết câu SQL tìm theo tên, dùng LIKE và $safe_keyword
// Lấy 3 cột id, name, price, sắp xếp theo id tăng dần
$sql = "SELECT id, name, price FROM products WHERE name LIKE '%{$safe_keyword}%' ORDER BY id ASC";
$products = db_fetch_array($sql);
echo json_encode([
    "status" => "success",
    "products" => $products
], JSON_UNESCAPED_UNICODE);
// TODO 3: trả về JSON gồm "status" => "success" và "products" => $products