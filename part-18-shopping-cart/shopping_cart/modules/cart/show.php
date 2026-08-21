<?php
$list_buy = get_list_buy_cart();
// show_array($list_buy);
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php if (!empty($list_buy)) { ?>
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <form action="?mod=cart&act=update_cart" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach ($list_buy as $item) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $item['code']; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                                    <img
                                                        src="<?php echo $item['product_thumb']; ?>"
                                                        alt=""
                                                    >
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo $item['url'] ?>" title="" class="name-product">
                                                    <?php echo $item['product_title']; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo format_price($item['price']); ?>đ
                                            </td>
                                            <td>
                                                <input
                                                    type="number"
                                                    name="qty[<?php echo $item['id'] ?>]"
                                                    value="<?php echo $item['qty']; ?>"
                                                    min="1"
                                                    max="10"
                                                    class="num-order"
                                                >
                                            </td>
                                            <td>
                                                <?php echo format_price($item['sub_total']); ?>đ
                                            </td>
                                            <td>
                                                <a href="<?php echo $item['url_delete_cart'] ?>" title="" class="del-product">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo format_price(get_total_cat()) ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng">
                                                <!-- <a href="" title="" id="">Cập nhật giỏ hàng</a> -->
                                                <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        <?php }else { ?>
            <p>Không có sản phẩm nào trong giỏ hàng</p>
        <?php } ?>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>