<?php

session_start();


$_SESSION['name'] = $_POST['pseudo'];

header('Location: /');

?>

