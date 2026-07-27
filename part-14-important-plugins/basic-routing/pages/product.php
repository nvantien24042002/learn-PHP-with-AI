<?php require __DIR__ . '/../lib/data.php'; ?>
<div id="content">
    <h1>Product Page</h1>

    <?php foreach ($product_list as $item) { ?>
        <h3><?php echo $item['name']; ?></h3>
        <p><?php echo $item['price']; ?></p>
    <?php } ?>
</div>