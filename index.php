<?php

include './tables/tables.php';
include './variables/variables.php';

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
            include './components/header.php';
            include './components/nav.php';
            include './components/main.php';
            include './components/aside.php';
            include './components/footer.php';
            ?>
        </div>
    </div>
</body>

</html>