<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./listStyle.css">
    <title>Details</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div>
        <?php
            include "functions.php";
            getDescription();
        ?>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>