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
    $target_dir = "uploads/";
    
    // Ensure the uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . uniqid() . "_" . basename($_FILES["wallpaper"]["name"]);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate file type (allow only images)
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($file_type, $allowed_types)) {
        http_response_code(400);
        echo "Invalid file type. Please upload an image file (jpg, jpeg, png, gif).";
        exit;
    }

    // Save the file
    if (move_uploaded_file($_FILES["wallpaper"]["tmp_name"], $target_file)) {
        echo $target_file; // Return the file path
    } else {
        http_response_code(500);
        echo "Failed to upload the file.";
    }
} else {
    http_response_code(405);
    echo "Method not allowed.";
}
?>


