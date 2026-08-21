<?php
$id = (int)$_GET['id'];
delete_cart_item($id);
echo "Đã xóa sản phẩm<br>";
redirect_to("?mod=cart&act=show");
?>