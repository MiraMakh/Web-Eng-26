<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Functions In PHP</title>
</head>
<body>
	<?php
		// String functions examples
		echo "<h2>Capitalize Each Word</h2>";
		$name = 'bill gates';
		$full_name = ucwords($name);  // Capitalizes the first letter of each word
		echo $full_name;
		echo "<hr/>";
		
		echo "<h2>Capitalize First Letter of String</h2>";
		$first_letter = ucfirst($name);  // Capitalizes only the first letter of the string
		echo $first_letter;
		echo "<hr/>";
		
		// Convert entire string to uppercase and lowercase
		$all_upper = strtoupper($name);
		$all_lower = strtolower($name);
		echo $all_upper . "<br/>";
		echo $all_lower;
		echo "<hr/>";
		
		// Trim whitespace and get string length
		$space = trim("username ");
		$letCount = strlen($space);
		echo "Length after trim: " . $letCount;
		echo "<hr/>";
	?>

	<?php
		// User-defined functions examples
		echo "<h2>User Defined Functions</h2>";
		echo "<hr/>";
		
		// Simple function to display an error message
		function display_error_message() {
			echo "Error Detected";
		}
		display_error_message();
		echo "<hr/>";
		
		// Function with parameter to display any message
		function display_message($message) {
			echo $message;
		}
		$error_text = "It is not an error. It is only a notification";
		display_message($error_text);
		echo "<hr/>";
		
		// Function that calculates sum and prints it directly
		function sumFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is: $sum";
         }
         sumFunction(10, 20);
         echo "<hr/>";
         
         // Function that calculates sum and returns the result
         function addFunction($num1, $num2) {
            return $num1 + $num2;
         }
         $return_value = addFunction(10, 20);
         echo "Returned value from the function: $return_value";
         echo "<hr/>";
	?>
</body>
</html>
