<?php
// Setting a cookie is done using the setcookie() function

/*
setcookie() syntax:
setcookie(
    string $name,          // Cookie name
    string $value = "",    // Cookie value
    int $expires = 0,      // Expiration time (Unix timestamp)
    string $path = "",     // Path where the cookie is accessible (default: current path)
    string $domain = "",   // Domain that the cookie is available to
    bool $secure = false,  // true - only accessible via HTTPS
    bool $httponly = false // true - only accessible via server-side (not JavaScript)
);
*/

// Set a cookie with name "user" and value "test"
// Expiration: 1 hour (3600 seconds) from now
// Path: "/" to make it available across the whole site
setcookie("user", "test", time() + 3600, "/");

// The cookie must be set at the beginning of the script,
// before any output (HTML, echo, print) is sent
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Set Cookie</title>
</head>
<body>
    <h2>Cookie has been set!</h2>
    <p><a href="read_cookie.php">Go to read the cookie</a></p>
</body>
</html>