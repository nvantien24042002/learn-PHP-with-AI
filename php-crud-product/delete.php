<?php
require_once __DIR__ . "/db/bootstrap.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !verify_csrf_token($_POST["csrf_token"] ?? null)) {
    http_response_code(403);
    exit("Invalid delete request.");
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
if (!$id || $id < 1) {
    http_response_code(404);
    exit("Product not found.");
}

$stmt = mysqli_prepare($conn, "DELETE FROM products WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);

if (!mysqli_stmt_execute($stmt) || mysqli_stmt_affected_rows($stmt) !== 1) {
    http_response_code(404);
    exit("Product not found.");
}

header("Location: index.php?message=deleted");
exit();
