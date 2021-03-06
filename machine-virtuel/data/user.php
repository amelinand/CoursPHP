<?php

    session_start();

$users = [
    [
        'name' => 'marc',
        'color' => 'vert',
        'age' => 34
    ],
    [
        'name' => 'paulette',
        'color' => 'bleu',
        'age' => 90
    ],
    [
        'name' => 'eskarina',
        'color' => 'rose',
        'age' => 13
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Utilisateur</title>
</head>

<body>
    <?php require './templates/header.php' ?>
    <main>
        <table>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Age</th>
            </tr>

            <?php foreach ($users as $user) : ?>

                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['color'] ?></td>
                    <td><?= $user['age'] ?></td>
                </tr>

            <?php endforeach ?>

        </table>
    </main>
</body>

</html>