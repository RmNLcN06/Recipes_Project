<?php

include_once './tables/tables.php';
include_once './variables/variables.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes | Home</title>

    <!-- Stylesheet CSS File -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <?php
            include_once './components/header.php';
            include_once './components/nav.php';
            include_once './components/main.php';
            include_once './components/aside.php';
            include_once './components/footer.php';
            ?>
        </div>
    </div>
</body>

</html>