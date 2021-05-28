<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Fichier HTML</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <h1>Inscrivez-vous !</h1>
    <form action="./validation.php" method="POST">
        <div>
            <label for="surname">Nom :</label>
            <input type="text" id="surname" name="surname" placeholder="Martin, Mystère, etc...">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" value="">
        </div>
        <div>
            <label for="age">Age :</label>
            <input type="number" name="age" min="0" max="100">
        </div>
        <div>
            <p>Genre :</p>
            <input type="radio" name="gender" id="woman" value="woman">
            <label for="woman">Femme</label>
            <br>
            <input type="radio" name="gender" id="man" value="man">
            <label for="man">Homme</label>
        </div>
    
        <input type="submit" value="Envoyer !">
    </form>
</body>
</html>

