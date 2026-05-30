<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Variables In PHP </title>
</head>

<body>
	<!-- 
		A variable in PHP is a container for data, 
		prefixed with a dollar sign ($) followed by its name. 
		PHP is a loosely typed language, meaning variables 
		do not require explicit type declarations; 
		the interpreter assigns the type based on the 
		assigned value. 
	-->
	<?php
	$a_bool = true;   // a bool
	$a_str  = "foo";  // a string
	$a_str2 = 'foo';  // a string
	$an_int = 12;     // an int

	echo get_debug_type($a_bool), "\n";
	echo get_debug_type($a_str), "\n";
	echo '<br />';

	// If this is an integer, increment it by four
	if (is_int($an_int)) {
		$an_int += 4;
	}
	var_dump($an_int);
	echo '<br />';

	// If $a_bool is a string, print it out
	var_dump($a_bool);
	if (is_string($a_bool)) {
		echo "String: $a_bool";
	}
	echo '<br />';
	?>
	<!--
		1. 	Must start with a letter or underscore (_).
		2. Can contain letters, numbers, and underscores(A-z, 0-9, and _ ).
		3. Cannot start with a number.
		4. Are case-sensitive ($age ≠ $AGE).
	-->
	<!-- 
		The scope of a variable determines 
		where it can be accessed within the code. 
		PHP defines several types of variable scopes:
	-->
	<!-- 1. Local Scope: Variables declared within a function 
		are local to that function and cannot be accessed 
		outside of it. 
	-->
	<?php
	function localFunc()
	{
		$localVar = "I'm local";
		echo $localVar; // Outputs: I'm local
	}
	localFunc();
	echo '<br />'
	?>
	<!-- 2. Global Scope: Variables declared outside of 
	 functions are global and can be accessed anywhere 
	 in the script, but not inside functions unless 
	 explicitly passed. -->
	<?php
	$globalVar = "I'm global";

	function globalFunc()
	{
		global $globalVar;
		echo $globalVar; // Outputs: I'm global
		echo '<br />';
		echo $GLOBALS['globalVar']; // Outputs: I'm global
	}
	globalFunc();
	echo '<br />'
	?>
	<!-- 3. Static Variables: A static variable retains its 
	 value between function calls. It's initialized only 
	 once and maintains its state across multiple invocations. -->
	<?php
	function counter()
	{
		static $count = 0;
		$count++;
		echo $count;
	}
	counter(); // Outputs: 1
	counter(); // Outputs: 2
	counter(); // Outputs: 3
	echo '<br />'
	?>

	<?PHP
	$firstVar = "<img src=images/php.png>";
	print($firstVar);
	echo '<br />'
	?>
	<?php
	$second_number = 25;
	$direct_text = 'My variable contains the number:';
	print('My variable contains the number:' . $second_number);
	echo "<h2>";
	echo ($direct_text . $second_number);
	echo "</h2>";
	?>
	<h2>
		<?php
		$test_number_one = 10;
		$test_number_two = 50;
		echo "sum of our two numbers is" . " ";
		echo $test_number_one + $test_number_two;
		?>
	</h2>

</body>

</html>