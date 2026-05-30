<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
        }

        header,
        nav,
        footer {
            padding: 10px;
            background-color: #f2f2f2;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php
    require_once "header.php";
    require_once "nav.php";
    require_once "content.php";
    require_once "footer.php";
    ?>

</body>

</html>