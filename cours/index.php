<?php


session_start();



$users = 
[
    [
        'name' => 'marc', 
        'color' => 'vert',
        'age' => 34,
        'other' => [12, 12, 43]
    ],
    [
        'name' => 'paulette', 
        'color' => 'bleu',
        'age' => 90
    ],
    [
        'name' => 'eskarina', 
        'color' => 'octarine',
        'age' => 13
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <h1>Accueil</h1>
</body>
</html>