<?php
include 'includes/header.php';
include 'includes/db_connect.php';

$query = "SELECT * FROM products WHERE stock > 0";
$result = $conn->query($query);
?>

<div class="container mt-5">
    <h2 class="mb-4">Our Products</h2>
    <div class="row">
        <?php while ($product = $result->fetch_assoc()) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/images/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text text-muted"><?php echo $product['description']; ?></p>
                        <p class="fw-bold">Price: <?php echo $product['price']; ?> Coins</p>
                        <a href="buy.php?id=<?php echo $product['id']; ?>" class="btn btn-success btn-sm">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
