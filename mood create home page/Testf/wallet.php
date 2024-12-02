<?php
include 'includes/header.php';
include 'includes/db_connect.php';

// Fetch user balance
$userId = 1; // Example: Hardcoded user ID
$query = "SELECT balance FROM users WHERE id = $userId";
$result = $conn->query($query);
$user = $result->fetch_assoc();
?>

<div class="container">
    <h2>Your Wallet</h2>
    <p><strong>Balance:</strong> <?php echo $user['balance']; ?> Coins</p>

    <form method="post" action="topup.php">
        <label for="amount">Top-up Amount:</label>
        <input type="number" name="amount" id="amount" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Top-Up</button>
    </form>
</div>

<?php
include 'includes/footer.php';
?>
