<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_orders_tracker_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize and validate input
$user = mysqli_real_escape_string($conn, $_POST['username']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit();
}

// Insert into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
