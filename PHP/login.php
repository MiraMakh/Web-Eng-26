<?php
session_start();

// Login logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Simple login check (use a database and hashing in production!)
    if ($user === 'admin' && $pass === '1234') {
        // Set session data
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user;

        // Regenerate session ID for security
        session_regenerate_id(true);

        // Redirect to protected page
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="post" action="" id="loginForm">
        <label>Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Log In</button>
    </form>

    <script>
        // Store session data in the browser's sessionStorage
        // NOTE: This is not recommended in real-world applications for security reasons
        const form = document.getElementById('loginForm');

        form.addEventListener('submit', function(e) {
            // Prevent the form from submitting immediately
            e.preventDefault();

            // Store data in sessionStorage
            const username = document.getElementById("username").value;
            sessionStorage.setItem("username", username);
            sessionStorage.setItem("logged_in", "true");

            // Submit the form manually
            form.submit();
        });
    </script>

</body>
</html>
