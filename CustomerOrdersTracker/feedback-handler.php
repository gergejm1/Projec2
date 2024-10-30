<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_orders_tracker_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = mysqli_real_escape_string($conn, $_POST['username']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

$sql = "INSERT INTO feedback (username, email, feedback) VALUES ('$user', '$email', '$feedback')";
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
