$(document).ready(function () {

    $(".qty").on("change", function () {
        var row = $(this).closest("tr");     // dòng chứa ô vừa đổi (đã học ở bài 2!)
        var qty = $(this).val();
        var price = row.data("price");
        console.log(price)

        $.ajax({
            url: "cart.php",
            method: "POST",
            data: { price: price, qty: qty },
            dataType: "json",

            success: function (data) {
                if (data.status === "success") {
                    // TODO 2: ghi data.subtotal vào ô .subtotal CỦA DÒNG NÀY
                    // Gợi ý: row.find(".subtotal") → tìm .subtotal bên trong row
                    row.find(".subtotal").text(data.subtotal)
                    updateGrandTotal();        // tính lại tổng cộng
                } else {
                    alert(data.message);
                }
            },

            error: function () {
                alert("Có lỗi kết nối đến server!");
            }
        });
    });

    // Hàm cộng tất cả thành tiền lại
    function updateGrandTotal() {
        var sum = 0;

        $(".subtotal").each(function () {
            // TODO 3: cộng giá trị của ô này vào sum
            // Gợi ý: $(this).text() là chuỗi → nhớ parseInt
            sum += parseInt($(this).text());
        });
        // TODO 4: ghi sum vào #grand-total
        $("#grand-total").text(sum);
    }

});