<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Example</title>
</head>

<body>
    <?php
    // --------------------------------------------
    // Receiving personal information via GET method
    // --------------------------------------------

    // Error message
    $error = "";

    if (isset($_GET['fullname']) && isset($_GET['age'])) {
        // Retrieve parameters and safely display them
        $fullname = htmlspecialchars($_GET['fullname']);
        $age = $_GET['age'];

        // Validation
        if (empty($fullname) || $age <= 0) {
            $error = "Please fill in all fields correctly.";
        } else {
            echo "<strong>Received GET data:</strong><br>";
            echo "Full Name: $fullname<br>";
            echo "Age: $age<br>";
        }
    } elseif (!empty($_SERVER['QUERY_STRING'])) {
        $error = "Please fill in all fields.";
    }

    // Display Query String
    echo "<br><em>Query String:</em> " . ($_SERVER['QUERY_STRING'] ?? 'Missing') . "<br>";

    // Show error if any
    if (!empty($error)) {
        echo "<p style='color:red;'>Error: $error</p>";
    }
    ?>

    <!-- GET Form -->
    <h3>Personal Information (via GET method)</h3>
    <form method="GET" action="">
        <label>Full Name:</label><br>
        <input type="text" name="fullname"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" min="1"><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

</body>

</html>