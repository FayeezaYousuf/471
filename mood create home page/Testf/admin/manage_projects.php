<?php
include '../includes/header.php';
include '../includes/db_connect.php';

// Fetch products
$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<div class="container">
    <h2>Manage Products</h2>
    <a href="add_product.php" class="btn btn-success mb-3">Add New Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($product = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?> Coins</td>
                    <td><?php echo $product['stock']; ?></td>
                    <td>
                        <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include '../includes/footer.php';
?>
