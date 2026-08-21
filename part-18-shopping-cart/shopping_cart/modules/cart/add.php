<?php
$id = (int)$_GET['id'];
echo $id;
add_cart($id);
update_infor_cart();
redirect_to('?mod=cart&act=show');