<?php require __DIR__ . '/../lib/data.php'; ?>
<div id="content">
    <h1>News Page</h1>

    <?php foreach ($news_list as $item) { ?>
        <h3><?php echo $item['title']; ?></h3>
        <p><?php echo $item['desc']; ?></p>
    <?php } ?>
</div>