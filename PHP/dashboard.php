<?php
session_start();

// If the user is not authenticated, redirect to login.php
if (empty($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Protected Page</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Log Out</a>
</body>
</html>
