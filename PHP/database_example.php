<?php 
// 1. Connect to the server (Procedural style)
/*
mysqli_connect($servername, $username, $password)
- creates a connection to the MySQL server
- parameters: server name, username, password
- returns a connection resource or false if connection failed
*/
$servername = "localhost";
$username = "root";
$password = "";

// Create connection to server
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to server successfully<br>";

// 2. Create database
/*
mysqli_query($conn, $sql)
- executes an SQL statement on the MySQL server
- parameters: connection resource and SQL statement
- returns true if successful, or false on error
*/
$sql = "CREATE DATABASE IF NOT EXISTS testDB1";
if (mysqli_query($conn, $sql)) {
    echo "Database 'testDB1' created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// 3. Create table
// Select the database
mysqli_select_db($conn, "testDB1");

/*
mysqli_select_db($conn, $dbname)
- selects the active database for SQL commands
- parameters: connection resource, database name
- returns true if successful, or false on error
*/
mysqli_select_db($conn, "testDB1");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE
)";
if (mysqli_query($conn, $sql)) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// 4. Insert data into the table (checking for unique email)

/*
mysqli_num_rows($result)
- returns the number of rows in a SELECT query result
- used to check if data exists
*/

/*
mysqli_query($conn, $sql)
- used to execute SQL queries (SELECT, INSERT, etc.)
- returns result set for SELECT or true/false for others
*/

// Check if 'test@example.com' already exists
$checkEmail = "SELECT id FROM users WHERE email='test@example.com'";
$result = mysqli_query($conn, $checkEmail);

if (mysqli_num_rows($result) == 0) {
    // If not exists, insert the record
    $sql = "INSERT INTO users (firstname, lastname, email) VALUES 
            ('Test', 'Test', 'test@example.com')";
    if (mysqli_query($conn, $sql)) {
        echo "Record for Test Test inserted successfully<br>";
    } else {
        echo "Error inserting Test Test: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "Email 'test@example.com' already exists. Skipping insertion.<br>";
}

// Same for another record (Test1)
$checkEmail = "SELECT id FROM users WHERE email='test1@example.com'";
$result = mysqli_query($conn, $checkEmail);

if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users (firstname, lastname, email) VALUES 
            ('Test1', 'Test', 'test1@example.com')";
    if (mysqli_query($conn, $sql)) {
        echo "Record for Test1 Test inserted successfully<br>";
    } else {
        echo "Error inserting Test1 Test: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "Email 'test1@example.com' already exists. Skipping insertion.<br>";
}

// 5. Read data from the table
/*
mysqli_fetch_assoc($result)
- fetches a result row as an associative array from SELECT query result
- returns false when no more rows are available
*/

$sql = "SELECT id, firstname, lastname, email FROM users";
$result = mysqli_query($conn, $sql);

echo "<h3>User List:</h3>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] .
            " | Name: " . $row["firstname"] . " " . $row["lastname"] .
            " | Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found.<br>";
}

// 6. Close connection
/*
mysqli_close($conn)
- closes the connection to MySQL server
- parameter: connection resource
*/
mysqli_close($conn);
echo "<br>Connection closed.";
?>
