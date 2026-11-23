<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng - AJAX</title>
</head>
<body>
    <h1>Giỏ hàng</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr data-price="15000">
                <td>Aquarius</td>
                <td>15000</td>
                <td><input type="number" class="qty" min="0" max="20" value="0"></td>
                <td class="subtotal">0</td>
            </tr>
            <tr data-price="150000">
                <td>Bò Húc</td>
                <td>150000</td>
                <td><input type="number" class="qty" min="0" max="20" value="0"></td>
                <td class="subtotal">0</td>
            </tr>
            <tr data-price="6000">
                <td>Lavie</td>
                <td>6000</td>
                <td><input type="number" class="qty" min="0" max="20" value="0"></td>
                <td class="subtotal">0</td>
            </tr>
        </tbody>
    </table>

    <p><b>Tổng cộng: <span id="grand-total">0</span></b></p>

    <script src="js/jquery-4.1.0.min.js"></script>
    <script src="cart.js"></script>
</body>
</html>