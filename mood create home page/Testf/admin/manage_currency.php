<?php
include '../includes/header.php';
include '../includes/db_connect.php';

// Update exchange rate
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exchangeRate = $_POST['exchange_rate'];
    // Store in database or a configuration file
    // Example logic: Update a settings table or a global variable
    echo "<div class='alert alert-success'>Exchange rate updated to $exchangeRate Coins per $1.</div>";
}
?>

<div class="container">
    <h2>Manage Currency</h2>
    <form method="post">
        <label for="exchange_rate">Set Exchange Rate (Coins per $1):</label>
        <input type="number" name="exchange_rate" id="exchange_rate" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Update Rate</button>
    </form>
</div>

<?php
include '../includes/footer.php';
?>
