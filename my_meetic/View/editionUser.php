<?php
session_start();
include_once("../Model/editionDeProfil.php");
$connexion = new Edition();
$user = $connexion->data_member();
$connexion->Edition();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/ScrollingMenu.css">
    <link rel="stylesheet" href="CSS/edition.css">
    <link rel="stylesheet" href="CSS/button.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1 id="title">MY MEETIC</h1>
        <div class="header">
            <div class="left-head">
                <div class="logo">
                    <img src="https://cdn.discordapp.com/attachments/605018303878004757/673173878738124800/Mymeetic.jpg" alt="logo">
                </div>
                <a href="#" class="toggle-nav">|||</a>
            </div>
            <div class="nice-nav">
                <div class="user-info clear">
                    <div class="user-name ">
                        <h5 id="Prenom">Commencez</h5>
                        <span id="Nom">quelque chose de réel *</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="containerUl">
                    <ul>
                        <li class="child-menu">
                            <a href="#"><span>Edition Profil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="../index.php">Accueil</a>
                                </li>
                                <li>
                                    <a href="profilUser.php">Votre Profil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-part"></div>

        <a href="../Controller/deconnexion.php" class="btn">Se déconnecter</a>
    </header>
    <div class="box">
        <div class="text-center">
            <div class="connexion">
                <h3>EDITION DE MON PROFIL</h3>
                <br>
                <form method="POST" action="editionUser.php">
                    <div class="input-container">
                        <input type="text" name="newPrenom" placeholder="Prénom" value="<?php echo $user['prenom']; ?>" />
                        <label>Prénom :</label>
                        <br /><br />
                    </div>
                    <div class="input-container">
                        <input type="text" name="newNom" placeholder="Nom" value="<?php echo $user['nom']; ?>" />
                        <label>Nom :</label>
                        <br /><br />
                    </div>
                    <div class="input-container">
                        <input type="text" name="newVille" placeholder="Ville" value="<?php echo $user['ville']; ?>" />
                        <label>Ville :</label>
                        <br /><br />
                    </div>
                    <div class="input-container">
                        <input type="text" name="newMail" placeholder="Mail" value="<?php echo $user['email']; ?>" />
                        <label>Email :</label>
                        <br /><br />
                    </div>
                    <div class="input-container">
                        <input type="password" name="newMdp" placeholder="Mot de passe" />
                        <label>Mot de passe :</label>
                        <br /><br />
                    </div>
                    <div class="input-container">
                        <input type="password" name="newMdp2" placeholder="Confirmation du mot de passe" />
                        <label>Confirmation du mot de passe :</label>
                        <br /><br />
                    </div>
                    <input type="submit" value="Mettre à jour mon profil !" class="btn2" /><br /><br />
                </form>
                <span id="alerte"><?php if (null !== $connexion->Edition()) {
                                        echo $connexion->Edition();
                                    } ?></span>
            </div>
        </div>
    </div>
    <script src="JS/headerMenu.js"></script>
</body>

</html>