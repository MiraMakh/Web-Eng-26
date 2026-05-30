<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>PHP Arrays Example</title>
</head>

<body>

	<!-- PHP Arrays -->
	<?php
	// Indexed Arrays
	// Arrays that use numeric indexes starting from 0

	// Method 1: Using array() function
	$seasons = array("Spring", "Summer", "Autumn", "Winter");
	echo "There are four seasons: " . $seasons[0] . ", " . $seasons[1] . ", " . $seasons[2] . ", and " . $seasons[3] . ".";
	echo "<br><hr>";

	// Method 2: Assigning values one by one
	$seasons2 = [];
	$seasons2[0] = "Spring";
	$seasons2[1] = "Summer";
	$seasons2[2] = "Autumn";
	$seasons2[3] = "Winter";

	// Array to string
	/* implode() joins elements of an array into a 
	single string, with a specified separator between 
	each element implode(string $separator, array $array): string*/
	echo "There are four seasons: " . implode(", ", $seasons2) . ".";
	echo "<br><hr>";

	// Associative Arrays
	// Arrays that use named keys (strings) instead of numeric indexes

	$students = [
		"David"   => "Jashi",
		"Niko"    => "Tvildiani",
		"Toma"    => "Oniani",
		"Demetre" => "Dvali"
	];

	// Using foreach loop to print key => value pairs
	foreach ($students as $firstName => $lastName) {
		echo "Key = " . $firstName . " | Value = " . $lastName . "<br>";
	}
	echo "<hr>";

	// Using for loop with keys array
	// array_keys() returns a new array containing all the keys from an input array
	$keys = array_keys($students);
	for ($i = 0; $i < count($keys); $i++) {
		$key = $keys[$i];
		echo $key . " => " . $students[$key] . "<br>";
	}
	echo "<hr>";

	// Multidimensional Arrays
	// Arrays containing one or more arrays

	// Example 1: Simple multidimensional array
	$mobilePhones = [
		["Samsung", "S10"],
		["Samsung", "S10+"],
		["Samsung", "S20 Ultra"]
	];

	// Output specific elements
	echo $mobilePhones[0][0] . " model: " . $mobilePhones[0][1] . ".<br>";
	echo $mobilePhones[1][0] . " model: " . $mobilePhones[1][1] . ".<br>";
	echo $mobilePhones[2][0] . " model: " . $mobilePhones[2][1] . ".<br>";
	echo "<hr>";

	// Loop through the multidimensional array
	for ($row = 0; $row < count($mobilePhones); $row++) {
		echo "<h2>Row number $row</h2><ul>";
		for ($col = 0; $col < count($mobilePhones[$row]); $col++) {
			echo "<li>" . $mobilePhones[$row][$col] . "</li>";
		}
		echo "</ul>";
	}
	echo "<hr>";

	// Example 2: Associative multidimensional array
	$movies = [
		1 => ["title" => "Rear Window", "director" => "Alfred Hitchcock", "year" => 1954],
		2 => ["title" => "Full Metal Jacket", "director" => "Stanley Kubrick", "year" => 1987],
		3 => ["title" => "Mean Streets", "director" => "Martin Scorsese", "year" => 1973]
	];

	// Accessing movie details
	echo $movies[1]["title"] . "<br>";
	echo $movies[1]["director"] . "<br>";
	echo $movies[1]["year"] . "<br>";
	echo "<hr>";
	?>

</body>

</html>