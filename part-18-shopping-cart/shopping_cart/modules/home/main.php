<?php
$list_mobile = get_list_product_by_cat_id(1);
$list_macbook = get_list_product_by_cat_id(2);
// show_array($list_mobile);
$infor_cat_mobile = get_infor_cat(1);
$infor_cat_macbook = get_infor_cat(2);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <!-- Điện thoại -->
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $infor_cat_mobile['cat_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <?php if(isset($list_mobile)){ ?>
                        <ul class="list-item clearfix">
                            <?php foreach($list_mobile as $item){ ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"> <?php echo $item['product_title']; ?></a>
                                    <p class="price"> <?php echo format_price($item['price']);?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                </div>
            </div>
            <!-- Macbook -->
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $infor_cat_macbook['cat_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <?php if (isset($list_macbook)) {?>
                        <ul class="list-item clearfix">
                            <?php foreach($list_macbook as $item){ ?>
                        <li>
                            <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb']; ?>" alt="">
                            </a>

                            <a href="<?php echo $item['url']; ?>" title="" class="title">
                                <?php echo $item['product_title']; ?>
                            </a>

                            <p class="price">
                                <?php echo format_price($item['price']); ?>đ
                            </p>
                        </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>