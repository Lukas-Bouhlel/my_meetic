<?php 
error_reporting(E_ALL);
include_once("../Controller/connexion.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/connexion.css">
    <link rel="stylesheet" href="CSS/buttonHref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="box">
        <form method="POST" action="connexionUser.php">
            <span class="text-center">Connexion</span>
            <div class="connexion">

                <div class="input-container">
                    <input type="email" name="mailconnect" id="mailconnect" placeholder="mail" />
                    <label for="mailconnect">Votre mail :</label>
                </div>
                <div class="input-container">
                    <input type="password" name="mdpconnect" id="password" placeholder="mot de passe" />
                    <label for="password">Votre mot de passe :</label>
                </div>
                <span id="alerte"><?php
                                    $connexion = new Connect();
                                    if (null !== $connexion->Connexion()) {
                                        echo $connexion->Connexion();
                                    } ?></span>
                <br />
                <input type="submit" name="formconnexion" value="Se connecter" class="btn" />
                <br>
                <div class="Inscrit">
                    <a href="InscriptionUser.php">
                        <span class="thin">Pas encore</span><span class="thick"> de compte ?</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>