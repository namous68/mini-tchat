<?php

include_once('./connexion.php');

?>



<!DOCTYPE html>
<html>

<head>
    <title>Mini Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div class="chat-window">
            <div class="messages">
            <?php   
            include_once('./connexion.php');
            

                try {
                    $afficher = $bdd->query('SELECT * FROM `1` ORDER BY id DESC LIMIT 0, 10');
                    while ($donnees = $afficher->fetch()) {
                ?>
                        <p> [ <?php echo $donnees['dateHour']; ?>] <strong><?php echo $donnees['pseudo']; ?></strong> : <?php echo $donnees['message']; ?></p>
                <?php
                    }
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
                

            ?>
            </div>
            <?php include_once('formSendMessage.php');?>
        </div>
        <div class="user-list">
            <div class="user"></div>
            <ul id="users">

            <?php   
            include_once('./connexion.php');
            

                try {
                    $afficher = $bdd->query('SELECT * FROM `1` ORDER BY id');
                    while ($donnees = $afficher->fetch()) {
                ?>
                        <p> [ <?php echo $donnees['dateHour']; ?>] <strong><?php echo $donnees['pseudo']; ?></p>
                <?php
                    }
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
                

            ?>
            </ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>