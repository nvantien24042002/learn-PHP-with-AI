<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";

require __DIR__ . "/inc/header.php";
?>
<div id="content">
    <?php
    if (file_exists($path)) {
        require $path;
    } else {
        require 'inc/404.php';
    }
    ?>
</div>
<?php
require __DIR__ . "/inc/footer.php";
?>