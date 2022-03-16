<?php

include './tables/tables.php';
include './variables/variables.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

switch ($page) {
    case 'accueil':
        $pagepath = 'pages/c31648.php';
        break;
    case 'idées_recettes':
        $pagepath = 'pages/c26479.php';
        break;
    case 'aides_cuisines':
        $pagepath = 'pages/c43941.php';
        break;
    case 'communauté':
        $pagepath = 'pages/c84627.php';
        break;
    case 'contact':
        $pagepath = 'pages/c14056.php';
        break;
    case 'connexion':
        $pagepath = 'pages/c49753.php';
        break;
    default:
        $pagepath = 'pages/c31648.php';
}

if (!file_exists($pagepath)) {
    $pagepath = 'pages/c31648.php';
}

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
            <header class="wrapper__header">
                <?php
                include('./inc/_header.php');
                ?>
            </header>
            <nav class="wrapper__nav">
                <?php
                include('./inc/_nav.php');
                ?>
            </nav>
            <main class="wrapper__main">
                <?php
                // include('./inc/_main.php');
                include($pagepath);
                ?>
            </main>
            <aside class="wrapper__aside">
                <?php
                include('./inc/_aside.php');
                ?>
            </aside>
            <footer class="wrapper__footer">
                <?php
                include('./inc/_footer.php');
                ?>
            </footer>
        </div>
    </div>
</body>

</html>