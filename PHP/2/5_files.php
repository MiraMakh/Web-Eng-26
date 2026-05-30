<?php
echo "<h2>Examples of Working with PHP Files</h2>";

// --------------------------------------------
// 1. readfile()
// Syntax: readfile(string $filename): int|false
// Description: Reads a file and directly outputs its contents.
// Parameters:
// - $filename: The name or path of the file
// Returns the number of bytes read or false on failure
// --------------------------------------------
echo "<h3>1. readfile()</h3>";
file_put_contents("sample.txt", "This is the beginning of the file.\nSecond line."); // create file with sample text
echo "File contents:<br>";
readfile("sample.txt");

echo "<hr>";

// --------------------------------------------
// fopen()
// Syntax: fopen(string $filename, string $mode): resource|false
// Description: Opens a file with a specified access mode and returns a resource.
// Used for reading, writing, or both.
// --------------------------------------------
// Parameters:
// - $filename: The name or path of the file
// - $mode: The mode to open the file with (see modes list below)

// List of modes:
// --------------------------------------------
// 'r'   – read-only. File must exist.
// 'r+'  – read and write. File must exist.

// 'w'   – write-only. Clears file if it exists or creates it.
// 'w+'  – read and write. Same as 'w' but allows reading.

// 'a'   – write-only, append to the end. Creates file if it doesn't exist.
// 'a+'  – read and write, append to the end. Creates file if it doesn't exist.

// 'x'   – write-only, create new file. Fails if file exists.
// 'x+'  – read and write, create new file. Fails if file exists.

// 'c'   – write-only, create file if it doesn't exist. Does not clear existing file.
// 'c+'  – read and write, create file if it doesn't exist. Does not clear existing file.

// Binary modes (needed on Windows):
// Any mode above can have 'b' appended (e.g., 'rb', 'w+b', 'a+b', etc.)
// 'b' means binary mode (e.g., images, PDFs).
// --------------------------------------------

echo "<h3>2. fopen()</h3>";
$filename = "sample.txt";
$file = fopen($filename, "r") or exit("Failed to open the file!");
echo "File opened successfully!";
fclose($file);
echo "<hr>";

// --------------------------------------------
// 3. feof()
// Syntax: feof(resource $handle): bool
// Description: Checks whether the end of file has been reached
// Parameters:
// - $handle: File resource returned by fopen()
// --------------------------------------------
//
// 4. fgets()
// Syntax: fgets(resource $handle, int $length = ?): string|false
// Description: Reads one line from a file
// Parameters:
// - $handle: File resource
// - $length (optional): Maximum number of bytes to read from the line
// --------------------------------------------
// 5. fclose()
// Syntax: fclose(resource $handle): bool
// Description: Closes an open file and frees the resource
// Parameters:
// - $handle: File resource from fopen()
// --------------------------------------------
echo "<h3>3. fgets() and feof()</h3>";
$file = fopen("sample.txt", "r"); // open for reading from start
echo "Lines read from the file:<br>";
while (!feof($file)) {
    echo nl2br(fgets($file));
}
fclose($file);
echo "<br>File closed.<hr>";

// --------------------------------------------
// 6. fread()
// Syntax: fread(resource $handle, int $length): string|false
// Description: Reads a specified length of data from a file
// Parameters:
// - $handle: File resource
// - $length: Number of bytes to read
// --------------------------------------------
echo "<h3>4. fread()</h3>";
$file = fopen("sample.txt", "r");
$size = filesize("sample.txt");
$contents = fread($file, $size);
fclose($file);
echo "File contents using fread():<br>" . nl2br(htmlspecialchars($contents));
echo "<hr>";

// --------------------------------------------
// 7. fgetc()
// Syntax: fgetc(resource $handle): string|false
// Description: Reads a single character from a file
// Parameters:
// - $handle: File resource from fopen()
// --------------------------------------------
echo "<h3>5. fgetc()</h3>";
$file = fopen("sample.txt", "r");
echo "First 10 characters:<br>";
for ($i = 0; $i < 10 && !feof($file); $i++) {
    echo fgetc($file);
}
fclose($file);
echo "<hr>";

// --------------------------------------------
// 8. fwrite()
// Syntax: fwrite(resource $handle, string $string, int $length = ?): int|false
// Description: Writes text to a file.
// Parameters:
// - $handle: File resource opened with fopen()
// - $string: Text to write
// - $length (optional): Maximum number of bytes to write
// --------------------------------------------
echo "<h3>6. fwrite()</h3>";

// Check if we can open file for writing
$file = fopen("newfile.txt", "w");
if ($file === false) {
    exit("Failed to create or open the file. Check directory permissions.");
}

$text = "Text of the new file.\nSecond line.";
fwrite($file, $text);
fclose($file);
echo "Text written to newfile.txt<hr>";

// --------------------------------------------
// 9. unlink()
// Syntax: unlink(string $filename): bool
// Description: Deletes the specified file
// Parameters:
// - $filename: Path of the file to delete
// --------------------------------------------
/* echo "<h3>7. unlink()</h3>";
if (unlink("newfile.txt")) {
    echo "File newfile.txt deleted successfully.";
} else {
    echo "Failed to delete the file.";
} */
?>