<?php
session_start();

// Remove all session variables
$_SESSION = [];
session_unset();
session_destroy();

// Delete the session ID cookie (an extra security step)
if (ini_get("session.use_cookies")) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Redirect back to login.php
header("Location: login.php");
exit();
?>
