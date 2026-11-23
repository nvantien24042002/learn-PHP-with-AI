<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm sản phẩm - AJAX</title>
</head>
<body>
    <h1>Tìm kiếm sản phẩm</h1>

    <input type="text" id="keyword" placeholder="Nhập tên sản phẩm...">
    <p id="count"></p>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody id="result-body">
            <!-- JS sẽ đổ dữ liệu vào đây -->
        </tbody>
    </table>

    <script src="js/jquery-4.1.0.min.js"></script>
    <script src="js/search.js"></script>
</body>
</html>