<?php

    session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Connection</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <h1>Connecter-vous !</h1>
    <form action="./controllers/session.php" method="POST">

        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" name="pseudo"  value="" placeholder="Pénom">
        </div>

    
        <input type="submit" value="Envoyer !">
    </form>
</body>
</html>