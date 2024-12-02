<?php
include '../includes/header.php';
include '../includes/db_connect.php';

$totalUsers = $conn->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$totalProducts = $conn->query("SELECT COUNT(*) AS count FROM products")->fetch_assoc()['count'];
$totalOrders = $conn->query("SELECT COUNT(*) AS count FROM orders")->fetch_assoc()['count'];
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-4"><?php echo $totalUsers; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Products</h5>
                    <p class="card-text fs-4"><?php echo $totalProducts; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="card-text fs-4"><?php echo $totalOrders; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>
