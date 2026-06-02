<?php
// Examples of PHP array sorting functions

// --------------------------------------------
// 1. sort()
// Syntax: sort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array values in ascending order.
// Re-indexes array indices starting from 0 (0,1,2...).
// Parameters:
// - &$array: the array to be sorted
// - $flags (optional): sorting behavior, can be one of:
//     SORT_REGULAR - normal comparison (default)
//     SORT_NUMERIC - numeric comparison
//     SORT_STRING - string comparison
//     SORT_LOCALE_STRING - locale-aware string comparison
//     SORT_NATURAL - natural order sorting (some exceptions for strings)
//     SORT_FLAG_CASE - can be combined with SORT_STRING for case-insensitive sorting
// --------------------------------------------
echo "1. sort()<br>";
$array1 = [3, 1, 4, 1, 5, 9];
sort($array1, SORT_NUMERIC);
print_r($array1);
echo "<br>";

// --------------------------------------------
// 2. rsort()
// Syntax: rsort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array values in descending order.
// Re-indexes array indices starting from 0.
// Parameters: same as sort()
// --------------------------------------------
echo "2. rsort()<br>";
$array2 = [3, 1, 4, 1, 5, 9];
rsort($array2, SORT_STRING);
print_r($array2);
echo "<br>";

// --------------------------------------------
// 3. asort()
// Syntax: asort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array by values in ascending order,
// maintaining key association.
// Parameters: same as sort()
// --------------------------------------------
echo "3. asort()<br>";
$array3 = ["a" => 3, "b" => 1, "c" => 4];
asort($array3, SORT_REGULAR);
print_r($array3);
echo "<br>";

// --------------------------------------------
// 4. ksort()
// Syntax: ksort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array by keys in ascending order.
// Parameters:
// - &$array: associative array
// - $flags (optional): same as in sort(), though usually less used here
// --------------------------------------------
echo "4. ksort()<br>";
$array4 = ["b" => 1, "c" => 4, "a" => 3];
ksort($array4, SORT_STRING);
print_r($array4);
echo "<br>";

// --------------------------------------------
// 5. arsort()
// Syntax: arsort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array by values in descending order,
// maintaining key association.
// Parameters: same as sort()
// --------------------------------------------
echo "5. arsort()<br>";
$array5 = ["a" => 3, "b" => 1, "c" => 4];
arsort($array5, SORT_NUMERIC);
print_r($array5);
echo "<br>";

// --------------------------------------------
// 6. krsort()
// Syntax: krsort(array &$array, int $flags = SORT_REGULAR): bool
// Description: Sorts the array by keys in descending order.
// Parameters: same as ksort()
// --------------------------------------------
echo "6. krsort()<br>";
$array6 = ["b" => 1, "c" => 4, "a" => 3];
krsort($array6, SORT_STRING);
print_r($array6);
echo "<br>";
?>
