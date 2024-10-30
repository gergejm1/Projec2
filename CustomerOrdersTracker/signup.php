<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Customer Orders Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php" class="nav-link">Home</a>
        <a href="faq.php" class="nav-link">FAQ</a>
        <a href="feedback.php" class="nav-link">Feedback</a>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="download.php" class="nav-link">Download</a>
            <a href="signout.php" class="nav-link nav-signout">Sign Out</a>
        <?php else: ?>
            <a href="signup.php" class="nav-link">Sign Up</a>
            <a href="login.php" class="nav-link">Log In</a>
        <?php endif; ?>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="header">
            <h1>Sign Up</h1>
            <p>Create an account to download the Customer Orders Tracker app.</p>
        </div>
        <form action="signup-handler.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Forestview | Customer Orders Tracker | All Rights Reserved</p>
    </div>
</body>
</html>
