$(document).ready(function () {

    // Lắng nghe khi ô số lượng thay đổi
    $("#num_order").on("change", function () {      // TODO A: tên sự kiện (change hay input?)

        var num_order = $(this).val();                // lấy số lượng vừa nhập
        var price = $("#price").text();             // TODO B: lấy giá trong <span id="price">

        $.ajax({
            url: "process.php",
            method: "POST",
            data: { num_order: num_order, price: price },
            dataType: "json",

            success: function (data) {
                console.log(data);

                if (data.status === "success") {
                    $("#total").text(data.total);
                } else {
                    alert(data.message);
                }
            },
        });
    });

});