<?php
/*
Reading cookies is done using the superglobal array $_COOKIE

Syntax:
$_COOKIE['name'] - reads the value of the cookie with the name 'name'

If the cookie does not exist, you should use isset() or empty()
to avoid warnings or notices.
*/

$user = $_COOKIE['user'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Read Cookie</title>
</head>
<body>
    <h2>Cookie Value</h2>
    <?php if ($user !== null): ?>
        <p>User: <strong><?php echo htmlspecialchars($user); ?></strong></p>
    <?php else: ?>
        <p>The cookie "user" is not set or has expired.</p>
    <?php endif; ?>

    <p><a href="set_cookie.php">Set the cookie again</a></p>
</body>
</html>