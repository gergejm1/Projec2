<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Customer Orders Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php" class="nav-link">Home</a>
        <a href="faq.php" class="nav-link">FAQ</a>
        <a href="feedback.php" class="nav-link">Feedback</a>
        <a href="about.php" class="nav-link">About Us</a>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="download.php" class="nav-link">Download</a>
            <a href="signout.php" class="nav-link nav-signout">Sign Out</a>
        <?php else: ?>
            <a href="login.php" class="nav-link">Log In</a>
        <?php endif; ?>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="header">
            <h1>About Us</h1>
            <p>Learn more about the Customer Orders Tracker team and our mission to simplify order management.</p>
        </div>
        <div class="content">
            <p>We’re committed to providing an efficient, user-friendly platform to help businesses streamline their order management process. Our team is dedicated to continuously improving the app to meet the evolving needs of our users.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Forestview | Customer Orders Tracker | All Rights Reserved</p>
    </div>
</body>
</html>
