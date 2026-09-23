<?php
require_once __DIR__ . "/db/bootstrap.php";

$message = $_GET["message"] ?? "";
$page = isset($_GET["page"]) ? max(1, (int) $_GET["page"]) : 1;
$num_per_page = 5;

$count = db_num_rows("SELECT id FROM products");
$total_row = $count;
$total_page = $total_row > 0 ? (int) ceil($total_row / $num_per_page) : 1;

$page = min($page, $total_page);
$start = ($page - 1) * $num_per_page;

$products = db_fetch_array("SELECT id, name, price, description FROM products ORDER BY id ASC LIMIT {$start}, {$num_per_page}");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__ . "/css/style.css"); ?>">
    <title>Product Manager</title>
</head>
<body>
    <h1>Product Manager</h1>

    <?php if ($message === "created") { ?>
        <p class="message success">Product created successfully!</p>
    <?php } elseif ($message === "updated") { ?>
        <p class="message success">Product updated successfully!</p>
    <?php } elseif ($message === "deleted") { ?>
        <p class="message success">Product deleted successfully!</p>
    <?php } ?>

    <a href="create.php" class="btn btn-add">Add Product</a>

    <div class="table-wrapper">
        <?php if ($count === 0) { ?>
            <p>No products found.</p>
        <?php } else { ?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $row) { ?>
                        <tr>
                            <td><?php echo e($row["id"]); ?></td>
                            <td><?php echo e($row["name"]); ?></td>
                            <td><?php echo number_format((float) $row["price"], 2, ",", "."); ?> ₫</td>
                            <td><?php echo e($row["description"]); ?></td>
                            <td class="action-cell">
                                <a class="btn btn-edit" href="edit.php?id=<?php echo e($row["id"]); ?>">Edit</a>
                                <form action="delete.php" method="post" class="inline-form" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này không?');">
                                    <input type="hidden" name="id" value="<?php echo e($row["id"]); ?>">
                                    <input type="hidden" name="csrf_token" value="<?php echo e(csrf_token()); ?>">
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="pagging">
                <li><a href="?page=<?php echo max(1, $page - 1); ?>"><</a></li>
                <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <li class="<?php echo $i === $page ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
                <li><a href="?page=<?php echo min($total_page, $page + 1); ?>">></a></li>
            </div>
        <?php } ?>

        <p>Total products: <?php echo e($count); ?></p>
    </div>
</body>
</html>
