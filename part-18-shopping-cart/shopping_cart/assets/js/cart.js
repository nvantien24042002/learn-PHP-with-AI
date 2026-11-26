$(document).ready(function () {

    $(".num-order").on("change", function () {
        var input = $(this);
        var row = input.closest("tr");
        var id = input.data("id");
        var qty = input.val();

        console.log("id:", id, "qty:", qty);
    });

});