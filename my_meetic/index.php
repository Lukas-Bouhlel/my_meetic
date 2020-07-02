<?php
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: View/InscriptionUser.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="View/CSS/accueil.css">
    <link rel="stylesheet" href="View/CSS/ScrollingMenu.css">
    <link rel="stylesheet" href="View/CSS/button.css">
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
                            <a href="#"><span>Accueil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="View/profilUser.php">Votre Profil</a>
                                </li>
                                <li>
                                    <a href="View/editionUser.php">Modifier votre Profil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-part"></div>
        <a href="Controller/deconnexion.php" class="btn">Se déconnecter</a>
    </header>
    <div class="slider">
        <ul class="slides">
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/605018303878004757/673644359769653288/image1.jpg" alt="image1"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/605018303878004757/673644415075483658/image3.jpg" alt="image2"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/605018303878004757/673644448390971422/image6.jpg" alt="image3"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/605018303878004757/673644375741431896/image2.jpg" alt="image4"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/605018303878004757/673644442443448340/image4.jpg" alt="image5"></li>
        </ul>
    </div>
    <script src="View/JS/headerMenu.js"></script>
</body>

</html>