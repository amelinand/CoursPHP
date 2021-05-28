<?php
session_start();
 $_SESSION['firstname'] = $_POST['firstname'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="./css/">
    <title>Validation</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <h1>Validation du formulaire</h1>
    <p>Bonjour <?= $_POST['firstname'] ?> !</p>
    <p>Du haut de tes <?= $_POST['age'] ?> ans, tu es bien abonné !</p>
</body>
</html>
