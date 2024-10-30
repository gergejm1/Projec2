<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Customer Orders Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php" class="nav-link">Home</a>
        <a href="faq.php" class="nav-link">FAQ</a>
        <a href="feedback.php" class="nav-link">Feedback</a>
        <a href="about.php" class="nav-link">About Us</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="header">
            <h1>Login</h1>
            <p>Log in to access the app download page.</p>
        </div>
        <form action="login-handler.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Log In</button>
        </form>
        <p>Don’t have an account? <a href="signup.php" class="link">Create New Account</a></p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Forestview | Customer Orders Tracker | All Rights Reserved</p>
    </div>
</body>
</html>
