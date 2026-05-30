<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['uploadedfile'])) {
        // Original filename from user's computer
        $fileName = $_FILES['uploadedfile']['name'];
        // Temporary file path on the server
        $fileTmpName = $_FILES['uploadedfile']['tmp_name'];
        // MIME type (e.g. image/jpeg)
        $fileType = $_FILES['uploadedfile']['type'];
        // File size in bytes
        $fileSize = $_FILES['uploadedfile']['size'];
        // Upload error code (from UPLOAD_ERR_* constants)
        $fileError = $_FILES['uploadedfile']['error'];

        $uploadDir = 'uploads/';

        // is_dir(string $filename): bool
        // Checks whether the directory at $uploadDir exists
        if (!is_dir($uploadDir)) {
            // mkdir(string $pathname, int $permissions = 0777, bool $recursive = false): bool
            // Creates a new directory at $uploadDir path
            mkdir($uploadDir, 0777, false);
        }

        // UPLOAD_ERR_OK - 0 means the file was successfully uploaded
        if ($fileError === UPLOAD_ERR_OK) {

            // Check file type — only image/jpeg is allowed
            if ($fileType === 'image/jpeg') {

                // Check file size — max 3MB (3,000,000 bytes)
                if ($fileSize <= 3000000) {

                    // Final file path
                    // basename(string $path, string $suffix = ""): string
                    // Returns the base name of the file — just the filename
                    // Example: basename("uploads/photo.jpg") => "photo.jpg"
                    $uploadFilePath = $uploadDir . basename($fileName);

                    // move_uploaded_file(string $filename, string $destination): bool
                    // Moves the uploaded file from the temporary directory to the uploads folder
                    if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
                        $message = "File successfully uploaded: " . htmlspecialchars($fileName);
                    } else {
                        $message = getUploadErrorMessage($fileError);
                    }
                } else {
                    $message = getUploadErrorMessage($fileError);
                }
            } else {
                $message = getUploadErrorMessage($fileError);
            }
        } else {
            $message = getUploadErrorMessage($fileError);
        }
    } else {
        $message = getUploadErrorMessage($fileError);
    }

    function getUploadErrorMessage($errorCode)
    {
        $uploadErrors = [
            UPLOAD_ERR_OK => "No error, the file uploaded successfully.",
            UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
            UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.",
            UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
            UPLOAD_ERR_NO_FILE => "No file was uploaded.",
            UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
            UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
        ];

        return $uploadErrors[$errorCode] ?? "Unknown upload error.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload in PHP</title>
</head>

<body>

    <?php
    if (isset($message)) {
        echo "<p><strong>" . $message . "</strong></p>";
    }
    ?>

    <!--
        enctype="multipart/form-data" — Required for file uploads
        action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" — Submits the form to the same file (with XSS protection)
        method="post" — Sends data via POST
    -->
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <label for="file">Choose a file to upload (JPEG only):</label>
        <input name="uploadedfile" type="file" id="file" />
        <input type="submit" value="Upload" />
    </form>

</body>

</html>