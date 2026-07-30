<?php

$page = $_GET['page'] ?? 'home';
$path = __DIR__ . "/pages/{$page}.php";
$content = file_exists($path) ? $path : __DIR__ . "/pages/errors.php";
require __DIR__ ."/inc/header.php";
?>
<div id="content">
    <?php require $content; ?>
</div>
<?php
require __DIR__ ."/inc/footer.php";
?>