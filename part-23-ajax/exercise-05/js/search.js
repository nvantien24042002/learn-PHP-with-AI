$(document).ready(function () {

    // Hàm gửi AJAX và vẽ bảng — viết thành hàm để gọi lại được nhiều lần
    function loadProducts(keyword) {
        $.ajax({
            url: "search.php",
            method: "GET",
            data: { keyword: keyword },
            dataType: "json",

            success: function (data) {
                var tbody = $("#result-body");

                // TODO 4: xóa sạch các dòng cũ trong tbody
                tbody.empty();
                if (data.products.length === 0) {
                    // TODO 5: thêm một dòng "Không tìm thấy sản phẩm nào"
                    // Gợi ý: <tr><td colspan="3">...</td></tr>, dùng tbody.append(...)
                    tbody.append('<tr><td colspan="3">Không tìm thấy sản phẩm nào</td></tr>');
                } else {
                    $.each(data.products, function (index, product) {
                        var tr = $("<tr>");                        // tạo một thẻ <tr> mới
                        tr.append($("<td>").text(product.id));     // cột ID (an toàn với .text)

                        // TODO 6: thêm 2 cột còn lại: tên và giá, làm y như dòng trên
                        tr.append($("<td>").text(product.name));
                        tr.append($("<td>").text(product.price));
                        tbody.append(tr);                          // gắn dòng vào bảng
                    });
                }

                // TODO 7: ghi "Tìm thấy X sản phẩm" vào #count
                $("#count").text("Tìm thấy " + data.products.length + " sản phẩm");
            },

            error: function () {
                alert("Có lỗi kết nối đến server!");
            }
        });
    }

    // TODO 8: khi gõ vào ô #keyword (sự kiện "input") → gọi loadProducts với giá trị trong ô
    $("#keyword").on("input", function () {
        loadProducts($(this).val());
    });
    // TODO 9: vừa mở trang → gọi loadProducts một lần với từ khóa rỗng để hiện tất cả
    loadProducts("");

});