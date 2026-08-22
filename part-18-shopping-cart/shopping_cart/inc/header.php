<!DOCTYPE html>
<html>
    <head>
        <title>Nuoc da Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/reset.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/import/home.css">
        <link href="assets/responsive.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp" class="clearfix">
                    <div class="wp-inner">
                        <a href="?mod=home&act=main" title="" id="logo" class="fl-left">NUOC DA STORE</a>
                        <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        <div id="cart-wp" class="fl-right">
                            <a href="?mod=cart&act=show" title="" id="btn-cart">
                                <span id="icon"><img src="assets/images/icon-cart.png" alt=""></span>
                                <?php
                                    $num_order = get_num_order_cart();
                                    if ($num_order > 0) {
                                        ?>
                                        <span id="num"><?php echo $num_order; ?></span>
                                        <?php
                                    }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>