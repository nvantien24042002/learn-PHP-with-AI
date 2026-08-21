<?php
session_start();
// DATA
require __DIR__ . "/data/pages.php";
require __DIR__ . "/data/products.php";
// LIB
require __DIR__ . "/lib/pages.php";
require __DIR__ . "/lib/product.php";
require __DIR__ . "/lib/data.php";
require __DIR__ . "/lib/cart.php";
require __DIR__ . "/lib/url.php";
require __DIR__ . "/lib/number.php";

$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
require __DIR__ . "/lib/template.php";
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