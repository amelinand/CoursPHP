<?php

$users = 
[
    [
        'name' => 'marc', 
        'color' => 'vert',
        'age' => 34,
        'id' => 1
    ],
    [
        'name' => 'paulette', 
        'color' => 'bleu',
        'age' => 90,
        'id' => 2
    ],
    [
        'age' => 13,
        'color' => 'octarine',
        'name' => 'eskarina', 
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
    <table>
        <tr>
            <th>Nom</th>
            <th>Couleur</th>
            <th>Age</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['color'] ?></td>
                <td><?= $user['age'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>