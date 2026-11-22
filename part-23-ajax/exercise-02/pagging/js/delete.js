// js/delete.js
$(".delete-form").on("submit", function (e) {
    e.preventDefault();

    if (!confirm("Bạn có chắc muốn xóa sản phẩm này không?")) {
        return;
    }

    var form = $(this);

    $.ajax({
        url: "delete_ajax.php",
        method: "POST",
        data: form.serialize(),
        dataType: "json",

        success: function (data) {
            console.log(data);
            // TODO 3: làm ở đây
            if (data.status === "success") {
                form.closest("tr").fadeOut(400, function () {
                    $(this).remove();
                });
            }

        },

        error: function (xhr) {
            var message = xhr.responseJSON ? xhr.responseJSON.message : "Có lỗi xảy ra!";
            alert(message);
        }
    });
});