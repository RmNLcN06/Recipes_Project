<?php
$recipes = [
    [
        'title' => 'Salade Niçoise',
        'recipe' => 'Première Etape : laver la salade et les ingrédients',
        'author' => 'florian.lucan@exemple.com',
        'date' => '09/03/2022',
        'is_enabled' => true,
    ],
    [
        'title' => 'Pizza Marguerite',
        'recipe' => 'Première Etape : mélanger la sauce tomate avec un mélange d\'origan et d\'huile d\'olive',
        'author' => 'aurelie.rufae@exemple.com',
        'date' => '09/03/2022',
        'is_enabled' => true,
    ],
    [
        'title' => 'Cookies aux pépites de chocolats',
        'recipe' => 'Première Etape : concasser le chocolat en petits morceaux',
        'author' => 'romain.lucan@exemple.com',
        'date' => '09/03/2022',
        'is_enabled' => true,
    ],
];
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
            <?php include './components/header.php'; ?>
            <?php include './components/nav.php'; ?>
            <?php include './components/main.php'; ?>
            <?php include './components/aside.php'; ?>
            <?php include './components/footer.php'; ?>
        </div>
    </div>
</body>

</html>