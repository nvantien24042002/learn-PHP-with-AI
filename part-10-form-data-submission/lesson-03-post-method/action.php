<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if ($username == '' || $password == '') {
        echo "Please fill in all fields.";
    } else {
        echo "Hello, " . htmlspecialchars($username) . "!";
    }
}
?>