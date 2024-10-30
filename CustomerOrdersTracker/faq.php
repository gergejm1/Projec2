<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Customer Orders Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="navbar">
    <a href="index.php" class="nav-link">Home</a>
    <?php if (basename($_SERVER['PHP_SELF']) != 'faq.php' && basename($_SERVER['PHP_SELF']) != 'feedback.php' && basename($_SERVER['PHP_SELF']) != 'download.php'): ?>
        <a href="about-us.php" class="nav-link">About Us</a>
    <?php endif; ?>
    <a href="faq.php" class="nav-link">FAQ</a>
    <a href="feedback.php" class="nav-link">Feedback</a>
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
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about our service.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Forestview | Customer Orders Tracker | All Rights Reserved</p>
    </div>
</body>
</html>
