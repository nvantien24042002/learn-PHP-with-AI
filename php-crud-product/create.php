<?php
require_once __DIR__ . "/db/bootstrap.php";

$name = "";
$price = "";
$desc = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $price = trim($_POST["price"] ?? "");
    $desc = trim($_POST["desc"] ?? "");

    if (!verify_csrf_token($_POST["csrf_token"] ?? null)) {
        $errors[] = "Invalid form token. Please try again.";
    }
    if ($name === "") {
        $errors[] = "Product name is required.";
    } elseif (strlen($name) > 100) {
        $errors[] = "Product name must not exceed 100 characters.";
    }
    if ($price === "" || !is_numeric($price) || (float) $price <= 0) {
        $errors[] = "Price must be greater than 0.";
    }

    if (!$errors) {
        $stmt = mysqli_prepare($conn, "INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
        $priceValue = (float) $price;
        mysqli_stmt_bind_param($stmt, "sds", $name, $priceValue, $desc);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php?message=created");
            exit();
        }

        $errors[] = "The product could not be created.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add product</title>
</head>
<body>
    <h1>Add product</h1>
    <a href="index.php" class="btn btn-back">Back to Products</a>

    <?php if ($errors) { ?>
        <div class="message error" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?php echo e($error); ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form action="create.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo e(csrf_token()); ?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo e($name); ?>" maxlength="100" required>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="<?php echo e($price); ?>" min="0.01" step="0.01" required>
        <label for="desc">Description</label>
        <textarea name="desc" id="desc"><?php echo e($desc); ?></textarea>
        <button type="submit" class="btn btn-add">Add Product</button>
    </form>
</body>
</html>
