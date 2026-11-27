$(document).ready(function () {

    $(".num-order").on("change", function () {
        var input = $(this);
        var row = input.closest("tr");
        var id = input.data("id");
        var qty = input.val();

        $.ajax({
            url: "update_cart_ajax.php",
            method: "POST",
            data: { id: id, qty: qty },
            dataType: "json",

            success: function (data) {
                if (data.status === "success") {
                    row.find(".sub-total").text(data.sub_total);
                    $("#total-price span").text(data.total);
                    $("#num").text(data.num_order);
                }
            },

            error: function (xhr) {
                var message = xhr.responseJSON ? xhr.responseJSON.message : "Có lỗi kết nối đến server!";
                alert(message);
            }
        });
    });

});