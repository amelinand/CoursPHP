<?php

session_start();
 $_SESSION['firstname'] = $_POST['firstname'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Connection</title>
</head>
<body>
<?php require_once './templates/header.php' ?>
<h1>Connecter-vous !</h1>
    <form action="index.php" method="POST">

        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname"  value="" placeholder="Pénom">
        </div>

    
        <input type="submit" value="Envoyer !">
    </form>
</body>
</html>