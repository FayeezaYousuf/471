<?php
include '../includes/header.php';
include '../includes/db_connect.php';

// Fetch statistics
$totalUsers = $conn->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$totalProducts = $conn->query("SELECT COUNT(*) AS count FROM products")->fetch_assoc()['count'];
$totalOrders = $conn->query("SELECT COUNT(*) AS count FROM orders")->fetch_assoc()['count'];
?>

<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Users</h5>
                    <p><?php echo $totalUsers; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <p><?php echo $totalProducts; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Orders</h5>
                    <p><?php echo $totalOrders; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>
