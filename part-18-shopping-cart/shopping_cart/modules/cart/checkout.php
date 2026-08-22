<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../PHPMailer/src/Exception.php';
require __DIR__ . '/../../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../../PHPMailer/src/SMTP.php';
$list_buy = get_list_buy_cart();
$total = get_total_cat();

if (isset($_POST['checkout'])) {

    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $address  = trim($_POST['address']);
    $tel      = trim($_POST['tel']);
    $note     = trim($_POST['note']);
    if (empty($fullname) || empty($email) || empty($address) || empty($tel)) {
        echo "Vui lòng nhập đầy đủ thông tin.";
        exit;
    }
    // Tạo nội dung email
    $body = "
        <h2>Thông tin khách hàng</h2>
        <p> Khách hàng {$fullname}</p>
        <p> Email {$email}</p>
        <p> Địa chỉ {$address}</p>
        <p> Số điện thoại {$tel}</p>
        <p> Ghi chú {$note}</p>
    ";
    $body.="<h3>Danh sách sản phẩm</h3>";
    foreach ($list_buy as $item) {
    $body .= "
        <p>
            {$item['product_title']} x {$item['qty']}
            - " . format_price($item['sub_total']) . "đ
        </p>
    ";
    }
    $body .= "<h3>Tổng đơn hàng: " . format_price($total) . "đ</h3>";
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tiennguyenvan2102001@gmail.com';
        $mail->Password   = 'sulc nain ezds efmc';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('tiennguyenvan2102001@gmail.com', 'NUOC DA STORE');
        $mail->addAddress($email, $fullname);

        $mail->isHTML(true);
        $mail->Subject = 'Xac nhan don hang - NUOC DA STORE';
        $mail->Body    = $body;

        $mail->send();

        echo "Đặt hàng thành công! Email xác nhận đã được gửi.";

    } catch (Exception $e) {

        echo "Không thể gửi email: {$mail->ErrorInfo}";
    }
}
?>
<div id="main-content-wp" class="checkout-page">

    <div class="wp-inner clearfix">

        <?php get_sidebar(); ?>

        <div id="content" class="fl-right">

            <div class="section" id="checkout-wp">

                <!-- =========================
                    CHECKOUT HEADER
                ========================== -->
                <div class="section-head">
                    <h3 class="section-title">
                        Thanh toán
                    </h3>
                </div>
                <!-- =========================
                    CHECKOUT DETAIL
                ========================== -->
                <div class="section-detail">

                    <div class="wrap clearfix">

                        <form method="POST">

                            <!-- =========================
                                CUSTOMER INFORMATION
                            ========================== -->
                            <div id="custom-info-wp" class="fl-left">

                                <h3 class="title">
                                    Thông tin khách hàng
                                </h3>

                                <div class="detail">

                                    <div class="field-wp">
                                        <label>Họ tên</label>

                                        <input
                                            type="text"
                                            name="fullname"
                                            id="fullname"
                                            value="<?php echo isset($fullname) ? $fullname : ''; ?>"
                                        >
                                    </div>


                                    <div class="field-wp">
                                        <label>Email</label>

                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            value="<?php echo isset($email) ? $email : ''; ?>"
                                        >
                                    </div>


                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>

                                        <input
                                            type="text"
                                            name="address"
                                            id="address"
                                            value="<?php echo isset($address) ? $address : ''; ?>"
                                        >
                                    </div>


                                    <div class="field-wp">
                                        <label>Số điện thoại</label>

                                        <input
                                            type="tel"
                                            name="tel"
                                            id="tel"
                                            value="<?php echo isset($tel) ? $tel : ''; ?>"
                                        >
                                    </div>


                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>

                                        <textarea name="note"><?php
                                            echo isset($note) ? $note : '';
                                        ?></textarea>
                                    </div>

                                </div>

                            </div>


                            <!-- =========================
                                ORDER REVIEW
                            ========================== -->
                            <div id="order-review-wp" class="fl-right">

                                <h3 class="title">
                                    Thông tin đơn hàng
                                </h3>

                                <div class="detail">

                                    <table class="shop-table">

                                        <!-- TABLE HEADER -->
                                        <thead>
                                            <tr>
                                                <td>
                                                    Sản phẩm
                                                    (<?php echo get_num_order_cart(); ?>)
                                                </td>

                                                <td>
                                                    Tổng
                                                </td>
                                            </tr>
                                        </thead>


                                        <!-- PRODUCT LIST -->
                                        <tbody>

                                            <?php foreach ($list_buy as $item) { ?>

                                                <tr class="cart-item">

                                                    <td class="product-name">

                                                        <?php echo $item['product_title']; ?>

                                                        <strong class="product-quantity">
                                                            x <?php echo $item['qty']; ?>
                                                        </strong>

                                                    </td>


                                                    <td class="product-total">

                                                        <?php echo format_price($item['sub_total']); ?>đ

                                                    </td>

                                                </tr>

                                            <?php } ?>

                                        </tbody>


                                        <!-- ORDER TOTAL -->
                                        <tfoot>

                                            <tr class="order-total">

                                                <td>
                                                    Tổng đơn hàng:
                                                </td>

                                                <td>

                                                    <strong class="total-price">
                                                        <?php echo format_price($total); ?>đ
                                                    </strong>

                                                </td>

                                            </tr>

                                        </tfoot>

                                    </table>


                                    <!-- =========================
                                        PAYMENT METHOD
                                    ========================== -->
                                    <div id="payment-checkout-wp">

                                        <ul id="payment_methods">

                                            <li>

                                                <input
                                                    type="radio"
                                                    checked="checked"
                                                    id="direct-payment"
                                                    name="payment-method"
                                                    value="direct-payment"
                                                >

                                                <label for="direct-payment">
                                                    Thanh toán tại cửa hàng
                                                </label>

                                            </li>


                                            <li>

                                                <input
                                                    type="radio"
                                                    id="payment-home"
                                                    name="payment-method"
                                                    value="payment-home"
                                                >

                                                <label for="payment-home">
                                                    Thanh toán tại nhà
                                                </label>

                                            </li>

                                        </ul>

                                    </div>


                                    <!-- =========================
                                        PLACE ORDER
                                    ========================== -->
                                    <div class="place-order-wp clearfix">

                                        <button
                                            type="submit"
                                            name="checkout"
                                        >
                                            Đặt hàng
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>