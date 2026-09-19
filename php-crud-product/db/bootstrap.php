<?php
require_once __DIR__ . "/config.php";

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    http_response_code(500);
    exit("Database connection failed.");
}

mysqli_set_charset($conn, "utf8mb4");

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

function csrf_token()
{
    if (empty($_SESSION["csrf_token"])) {
        $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    }

    return $_SESSION["csrf_token"];
}

function verify_csrf_token($token)
{
    return is_string($token)
        && isset($_SESSION["csrf_token"])
        && hash_equals($_SESSION["csrf_token"], $token);
}
