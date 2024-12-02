<?php
$servername = "localhost";
$username = "root";
$password = ""; // Add your MySQL password
$dbname = "mood_create";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $_POST['note'];
    $sql = "INSERT INTO notes (content) VALUES ('$note')";
    if ($conn->query($sql) === TRUE) {
        echo "Note saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM notes ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $notes = [];
    while ($row = $result->fetch_assoc()) {
        $notes[] = $row;
    }
    echo json_encode($notes);
}

$conn->close();
?>
