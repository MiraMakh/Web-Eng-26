<?php
// Set a cookie
// name: username
// value: "test"
// expire: in one hour (3600 seconds)
// path: "/" means the cookie is accessible throughout the entire website
setcookie("username", "test", time() + 3600, "/"); // The cookie will be created for 1 hour

// Read the cookie
// Cookies become available on the "next request" — i.e., after refreshing or navigating to the next page
if (isset($_COOKIE["username"])) {
    echo "Username read from cookie: " . $_COOKIE["username"] . "<br>";
} else {
    echo "Cookie does not exist yet or has been deleted.<br>";
}

// Delete the cookie
// To delete a cookie, set the same name but with an expired time
// The cookie will be removed on the next page load
// setcookie("username", "", time() - 3600, "/");
?>
