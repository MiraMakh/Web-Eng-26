<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Constants In PHP </title>
</head>

<body>
	<!--PHP Constants-->
	<!--
		A constant is a name for a value 
		that cannot be changed after it’s defined. 
		Unlike variables, constants:
		1. Do not start with $
		2. Are defined using define(), or from PHP 7+, using const
		3. Have global scope by default

		* Constant names are usually written in uppercase 
		(by convention).
		* You cannot redefine or undefine a constant.
		* Constants are automatically global and can be 
		used anywhere in your script.
	-->
	<?php
	define("GREETING", "Welcome to our site!");
	echo GREETING; // Outputs: Welcome to our site!

	echo '<br />';

	const PI = 3.14159;
	echo PI; // Outputs: 3.14159
	echo '<br />';
	?>

	<!-- define(name, value, case_insensitive = false)
	 	name: The name of the constant (string)
		value: The value to assign to the constant (string, int, float, bool, etc.)
		case_insensitive(Optional): If true, the constant 
		name is not case-sensitive Default is false. 
		(Deprecated as of PHP 7.3, removed in PHP 8)
	-->
	<?php
	define("SITE_NAME", "My Website");
	echo SITE_NAME; // Outputs: My Website
	echo '<br />';

	/* define("GREETING1", "Hello!", true); // Only works in PHP < 7.3
	echo greeting1; // Outputs: Hello!
	echo '<br />'; */
	?>
	<?php
	require_once "config.php";

	echo "<h1>Hello " . SITE_NAME . "!</h1>";
	echo '<br />';
	echo "<p>Version of the web page is: " . VERSION . "</p>";
	echo '<br />';
	echo "<p>URL which should be handled is: " . BASE_URL . "products</p>";
	echo '<br />';
	?>

</body>

</html>