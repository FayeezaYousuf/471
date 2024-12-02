<?php
include 'includes/header.php';
include 'includes/db_connect.php';

$query = "SELECT * FROM products WHERE stock > 0";
$result = $conn->query($query);
?>

<div class="container">
    <h2>Products</h2>
    <div class="row">
        <?php while ($product = $result->fetch_assoc()) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p><strong>Price:</strong> <?php echo $product['price']; ?> Coins</p>
                        <a href="buy.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
