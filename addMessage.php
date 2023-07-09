<?php

include_once('connexion.php');
$req = $bdd->prepare('INSERT INTO `1` (pseudo, message, dateHour) VALUES(:pseudo, :message, NOW())');
$req->execute(array(
    'pseudo'=> $_POST['pseudo'],
    'message'=> $_POST['message']
));

header('location: index.php');

?>