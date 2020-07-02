<?php
include_once("../Controller/inscription.php");
$connexion = new Inscription();
$erreur = $connexion->inscription_request();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/inscription.css">
    <link rel="stylesheet" href="CSS/buttonHref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="box">
        <form method="POST" action="InscriptionUser.php" class='form'>
            <span class="text-center">Inscription</span>
            <div class="text-center">

                <div class="input-container">
                    <input type="text" placeholder="Votre nom" name="nom" id="nom" value="<?php if (isset($_POST["nom"])) {
                                                                                        echo $_POST["nom"];
                                                                                    } ?>">
                    <label for="nom">Nom :</label>
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Votre prénom" name="prenom" id="prenom" value="<?php if (isset($_POST["prenom"])) {
                                                                                            echo $_POST["prenom"];
                                                                                        } ?>">
                    <label for="prenom">Prénom :</label>
                </div>
                <div class="input-container">
                    <input type="email" placeholder="Votre mail" name="mail" id="e-mail" value="<?php if (isset($_POST["mail"])) {
                                                                                        echo $_POST["mail"];
                                                                                    } ?>">
                    <label for="e-mail">mail :</label>
                </div>
                <div class="input-container">
                    <input type="email" placeholder="Confirmer votre mail" name="mail2" id="e-mail2" value="<?php if (isset($_POST["mail2"])) {
                                                                                                    echo $_POST["mail2"];
                                                                                                } ?>">
                    <label for="e-mail2">Confirmation du mail :</label>
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp">
                    <label for="mdp">Mot de passe :</label>
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Confirmer votre mot de passe" name="mdp2" id="mdp2">
                    <label for="mdp2">Confirmation du mot de passe :</label>
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Votre ville" name="ville" id="ville" value="<?php if (isset($_POST["ville"])) {
                                                                                            echo $_POST["ville"];
                                                                                        } ?>">
                    <label for="ville">Ville :</label>
                </div>
                <div class="input-container">
                    <input type="date" name="date_de_naissance" id="date_de_naissance" value="<?php if (isset($_POST["date_de_naissance"])) {
                                                                                                                    echo $_POST["date_de_naissance"];
                                                                                                                } ?>">
                    <label for="date_de_naissance">Date de naissance :</label>
                </div>

                <div class="center-align">
                    <input type="radio" name="genre" id="size_1" value="homme" />
                    <label for="size_1" class="genre">Homme</label>

                    <input type="radio" name="genre" id="size_2" value="femme" />
                    <label for="size_2" class="genre">Femme</label>

                    <input type="radio" name="genre" id="size_3" value="autre" checked />
                    <label for="size_3" class="genre">Autre</label>
                </div>
                <span id="alerte"><?php if (isset($erreur)) {
                                        echo $erreur;
                                    } ?></span>
                <br />
                <input type="submit" name="forminscription" value="Je m'inscris" class="btn">

                <div class="Inscrit">
                    <a href="connexionUser.php">
                        <span class="thin">Connectez-vous </span><span class="thick">ici !</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>