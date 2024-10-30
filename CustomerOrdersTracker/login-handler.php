<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_orders_tracker_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        header("Location: download.php");
    } else {
        echo "Invalid password!";
    }
} else {
    echo "Invalid email!";
}
$conn->close();
?>
