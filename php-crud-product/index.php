<?php
require_once __DIR__ . "/db/bootstrap.php";

$message = $_GET["message"] ?? "";
$count = db_num_rows("SELECT id FROM products");
$products = db_fetch_array("SELECT id, name, price, description FROM products ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
        <?php } ?>

        <p>Total products: <?php echo e($count); ?></p>
    </div>
</body>
</html>
