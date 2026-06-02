<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <?php
    // --------------------------------------------
    // Receiving CV data via POST method
    // --------------------------------------------

    $error = "";

    // Check the request method
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // If both email and experience are submitted
        if (isset($_POST['email']) && isset($_POST['experience'])) {

            // --------------------------------------------
            // htmlentities()
            // Protects special HTML characters from injection attacks
            // --------------------------------------------
            $email = htmlentities($_POST['email']);
            $experience = htmlspecialchars($_POST['experience']);

            // --------------------------------------------
            // filter_var()
            // Syntax: filter_var(mixed $variable, int $filter, array|int $options = 0): mixed
            //
            // Parameters:
            // - $variable: the value to validate or sanitize
            // - $filter: the type of filter to apply (e.g., FILTER_VALIDATE_EMAIL)
            // - $options (optional): additional options or flags
            //
            // FILTER_VALIDATE_EMAIL:
            // Validates that a value is a proper email address format
            // Returns the filtered string if valid, or FALSE if not
            // --------------------------------------------
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($experience)) {
                $error = "Invalid email address or experience field is empty.";
            } else {
                echo "<strong>Received POST data:</strong><br>";
                echo "Email: $email<br>";
                echo "Experience: $experience<br>";

                // --------------------------------------------
                // header()
                // Sends a raw HTTP header (e.g., to redirect)
                //
                // headers_sent(): checks if headers have already been sent
                // --------------------------------------------
                if (!headers_sent()) {
                    // Example redirection:
                    // header("Location: thanks.php");
                    // exit;
                    echo "<em>header() is ready for redirection.</em><br>";
                } else {
                    echo "<em>header() cannot be used because headers are already sent.</em><br>";
                }
            }
        } else {
            $error = "Please fill in all fields.";
        }
    }
    ?>

    <!-- POST Form -->
    <h3>Submit Your CV (using POST method)</h3>
    <form method="POST" action="">
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Work Experience:</label><br>
        <textarea name="experience" rows="4" cols="40"></textarea><br><br>

        <input type="submit" value="Submit CV">
    </form>

    <?php
    // Query string is usually empty with POST, but we display it anyway
    echo "<br><em>Query String:</em> " . ($_SERVER['QUERY_STRING'] ?? 'Missing') . "<br>";

    // Show error message
    if (!empty($error)) {
        echo "<p style='color:red;'>Error: $error</p>";
    }

    // ===============================
    // $_GET vs $_POST Comparison
    // ===============================

    // $_GET
    // - Data is visible in the URL
    // - Used for small amounts of data
    // - Can be bookmarked/shared
    // - Less secure

    // $_POST
    // - Data is not visible in the URL
    // - Used for forms, login, register
    // - Can send larger amounts of data
    // - More secure

    // Main Difference:
    // $_GET  -> Gets data from the URL
    // $_POST -> Gets data from a form in a hidden request
    ?>
</body>

</html>