<?php
/* 
Start the session — this must be called at the very beginning of the script,
before any output is sent. It's required before using any session variables.
*/
session_start();

// Create session variables
// Syntax: $_SESSION['name'] = value;
$_SESSION['username'] = "test";
$_SESSION['email'] = "test@example.com";

// Read session variables
// Syntax: echo $_SESSION['name'];
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";

// Check if a session variable exists
// Syntax: isset($_SESSION['name'])
if (isset($_SESSION['username'])) {
    echo "User is logged in.<br>";
} else {
    echo "Session does not exist.<br>";
}

// Remove a specific session variable
// Syntax: unset($_SESSION['name']);
unset($_SESSION['email']); // Only 'email' will be removed

// Remove all session variables (session remains active)
// Syntax: session_unset();
session_unset(); // Clears all data from the $_SESSION array

// Destroy the session completely — removes all data and closes the session
// Syntax: session_destroy();
session_destroy(); // Completely ends the session

// Additionally — get the current session ID (intermediate use)
// Syntax: session_id();
echo "Session ID: " . session_id();
?>
