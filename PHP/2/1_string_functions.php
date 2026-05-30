<?php
// PHP string functions examples

// --------------------------------------------
// strlen()
// Syntax: strlen(string $string): int
// Parameters:
// - $string: The string whose length we want to count
// Returns the number of characters in the string
// --------------------------------------------
echo "1. strlen and strpos<br>";
$str = "Hello, World!";
echo "strlen: " . strlen($str) . "<br>";

// --------------------------------------------
// strpos()
// Syntax: strpos(string $haystack, string $needle): int|false
// Parameters:
// - $haystack: The main string to search in
// - $needle: The substring to find
// Returns the position of the first occurrence or false if not found
// --------------------------------------------
echo "strpos: " . strpos($str, "World") . "<br>";

echo "<br>";

// --------------------------------------------
// trim()
// Syntax: trim(string $string, string $characters = " \n\r\t\v\0"): string
// Description:
// Removes whitespace (spaces, tabs, newlines, etc.) or specified characters
// from the beginning and end of the string.
//
// Parameters:
// - $string: The string to be trimmed
// - $characters (optional): Characters to remove from both ends
//   Default is " \n\r\t\v\0" (space, newline, carriage return, tab, vertical tab, NULL)
// --------------------------------------------
echo "2. trim, ltrim, rtrim<br>";
$rawString = "   Hello, PHP!   ";
echo "Original: $rawString <br>";
echo "trim:" . trim($rawString) . "<br>";

// --------------------------------------------
// ltrim()
// Syntax: ltrim(string $string, string $characters = " \n\r\t\v\0"): string
// Description:
// Removes whitespace or specified characters from the **left side** (beginning)
// of the string.
//
// Parameters:
// - $string: The string to trim
// - $characters (optional): Characters to remove from the left side
// --------------------------------------------
echo "ltrim:" . ltrim($rawString) . "<br>";

// --------------------------------------------
// rtrim()
// Syntax: rtrim(string $string, string $characters = " \n\r\t\v\0"): string
// Description:
// Removes whitespace or specified characters from the **right side** (end)
// of the string.
//
// Parameters:
// - $string: The string to trim
// - $characters (optional): Characters to remove from the right side
// --------------------------------------------
echo "rtrim:" . rtrim($rawString) . "<br>";

echo "<br>";

// --------------------------------------------
// str_word_count()
// Syntax: str_word_count(string $string, int $format = 0, ?string $charlist = null): int|array
// Description:
// Returns the number of words in the string or an array of words
// depending on the format parameter.
//
// Parameters:
// - $string: The string to analyze
// - $format (optional):
//     0 - returns the count of words (default)
//     1 - returns an array of words
//     2 - returns an associative array [position => word]
// - $charlist (optional): Additional characters considered as part of a word (e.g., apostrophe, dash)
// --------------------------------------------
echo "3. str_word_count<br>";
$sentence = "PHP is a powerful scripting language.";
echo "Words count: " . str_word_count($sentence) . "<br>";

echo "<br>";

// --------------------------------------------
// str_replace()
// Syntax: str_replace(array|string $search, array|string $replace, string|array $subject): string|array
// Parameters:
// - $search: The string or array of strings to search for
// - $replace: The replacement string or array of strings
// - $subject: The string or array to perform replacements on
// Returns the modified string or array
// --------------------------------------------
echo "4. str_replace and substr_replace<br>";
$text = "I like apples and apples are good.";
$replaced = str_replace("apples", "oranges", $text);
echo "str_replace: $replaced<br>";

// --------------------------------------------
// substr_replace()
// Syntax: substr_replace(string $string, string $replacement, int $start, ?int $length = null): string
// Description:
// Replaces a portion of the main string with another string
//
// Parameters:
// - $string: The original string
// - $replacement: The string to insert
// - $start: The starting index to begin replacement (0-based)
// - $length (optional): Number of characters to replace; if omitted, replaces to the end
// --------------------------------------------
$original = "Hello World";
$subReplaced = substr_replace($original, "PHP", 6);
echo "substr_replace: $subReplaced<br>";

echo "<br>";

// --------------------------------------------
// strtoupper()
// Syntax: strtoupper(string $string): string
// Description:
// Converts all characters in the string to uppercase
//
// Parameters:
// - $string: The string to convert
// --------------------------------------------
echo "5. strtoupper, strtolower, ucwords<br>";
$caseStr = "php is awesome!";
echo "strtoupper: " . strtoupper($caseStr) . "<br>";

// --------------------------------------------
// strtolower()
// Syntax: strtolower(string $string): string
// Description:
// Converts all characters in the string to lowercase
//
// Parameters:
// - $string: The string to convert
// --------------------------------------------
echo "strtolower: " . strtolower($caseStr) . "<br>";

// --------------------------------------------
// ucwords()
// Syntax: ucwords(string $string): string
// Description:
// Converts the first character of each word to uppercase
//
// Parameters:
// - $string: The string whose words should be capitalized
// --------------------------------------------
echo "ucwords: " . ucwords($caseStr) . "<br>";

echo "<br>";

// --------------------------------------------
// explode()
// Syntax: explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
// Description:
// Splits the string into an array by the specified delimiter
//
// Parameters:
// - $separator: The delimiter character(s) to split by
// - $string: The input string to split
// - $limit (optional): Maximum number of elements in the resulting array
// --------------------------------------------
echo "6. explode and implode<br>";
$csv = "apple,banana,cherry";
$array = explode(",", $csv);
echo "explode:<br>";
print_r($array);

echo "<br>";

// --------------------------------------------
// implode()
// Syntax: implode(string $glue, array $pieces): string
// Description:
// Joins array elements into a string with a glue string between elements
//
// Parameters:
// - $glue: The string inserted between elements
// - $pieces: The array to join
// --------------------------------------------
$joined = implode(" - ", $array);
echo "implode: $joined<br>";
?>