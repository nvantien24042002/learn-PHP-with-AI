<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính bình phương - AJAX</title>
</head>
<body>
    <h1>Tính bình phương</h1>

    <input type="text" id="number" placeholder="Nhập một số">
    <button type="button" id="btn-calc">Tính</button>

    <div id="result"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $("#btn-calc").click(function () {
            // Lấy giá trị trong ô nhập
            var so = $("#number").val();

            $.ajax({
                url: "calc.php",        // gửi đến file nào
                method: "POST",         // gửi bằng phương thức nào
                data: { so: so },       // dữ liệu gửi lên → PHP đọc bằng $_POST["so"]
                dataType: "json",       // kiểu dữ liệu mong đợi server trả về

                success: function (data) {
                    // data chính là JSON mà calc.php trả về
                    console.log(data);  // xem trong F12 → Console

                    if (data.status === "success") {
                        $("#result").html(
                            "Bình phương của " + data.so + " là <b>" + data.binh_phuong + "</b>" +
                            ", lập phương là <b>" + data.lap_phuong + "</b>"
                        );
                    } else {
                        $("#result").html('<span style="color:red">' + data.message + "</span>");
                    }
                },

                error: function () {
                    $("#result").html("Có lỗi kết nối đến server!");
                }
            }); // đóng $.ajax
        }); // đóng .click
    </script>
</body>
</html>