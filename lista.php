<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./listStyle.css">
    <link rel="stylesheet" href="./footer.css">
    <title>Min Lista</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="content">
    <h1><?php myConstant();?>:</h1>
    <form action="./details.php" method="POST">
        <select class="dropdown" name="dropdown">
            <?php
                include "functions.php";
                sortList();
            ?>
        </select>
        <input type="submit" name="submit">
    </form>
</div>
    <?php
        include "footer.php";
    ?>
</body>
</html>