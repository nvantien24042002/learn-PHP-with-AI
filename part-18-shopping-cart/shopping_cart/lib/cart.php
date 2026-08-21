<?php
function add_cart($id)
{
    $item = get_product_by_id($id);
    $qty = 1;
    if (
        isset($_SESSION['cart']['buy']) &&
        array_key_exists($id, $_SESSION['cart']['buy'])
    ) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty,
    );
}
function update_infor_cart(){
    $num_order = 0;
    $total = 0;
    if (!empty($_SESSION['cart']['buy'])) {
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total
    );
}
function get_list_buy_cart(){
    if (isset($_SESSION['cart']['buy'])) {
        foreach($_SESSION['cart']['buy'] as &$item){
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $item['url_delete_cart']="?mod=cart&act=delete_item&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
}
function get_num_order_cart()
{
    if (isset($_SESSION['cart']['info']['num_order'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return 0;
}
function get_total_cat(){
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
}
function delete_cart_item($id){
    if (!empty($id)) {
        unset($_SESSION['cart']['buy'][$id]);
        update_infor_cart();
    }else{
        unset($_SESSION['cart']['buy']);
    }
}
function delete_cart()
{
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']['buy']);
    }

    update_infor_cart();
}
function update_cart($qty) {
    foreach ($qty as $id => $new_qty) {
        // Cập nhật lại số lượng mới
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        // Tính lại sub_total = số lượng mới * giá sản phẩm
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    }
}
?>