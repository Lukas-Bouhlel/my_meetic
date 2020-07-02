<?php
include_once("../Model/gestionUser.php");
$connexion = new Gestion();
$userinfo = $connexion->Gestion();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/ScrollingMenu.css">
    <link rel="stylesheet" href="CSS/profil.css">
    <link rel="stylesheet" href="CSS/button.css">
    <link rel="stylesheet" href="CSS/buttonHref.css">
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
                        <h5 id="Prenom">Profil de <?php echo $userinfo['prenom']; ?></h5>
                        <span id="Nom">Commencez quelque chose de réel *</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="containerUl">
                    <ul>
                        <li class="child-menu">
                            <a href="#"><span>Votre Profil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="../index.php">Accueil</a>
                                </li>
                                <li>
                                    <a href="editionUser.php">Modifier votre Profil</a>
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
    
    <div class="box"><img id="Wac" src="https://cdn.discordapp.com/attachments/640855932527706114/660574290495668239/Wc.gif" alt="wacLogo" >
        <div class="text-center">  
            <br /><br />
            <span>Prénom = <?php echo $userinfo['prenom']; ?></span>
            <br />
            <span>Nom = <?php echo $userinfo['nom']; ?></span>
            <br />
            <span>Mail = <?php echo $userinfo['email']; ?></span>
            <br />
            <span>Mot de passe = <?php echo $userinfo['mot_de_passe']; ?></span>
            <br />
            <span>Ville = <?php echo $userinfo['ville']; ?></span>
            <br />
            <span>Date de naissance = <?php echo $userinfo['date_de_naissance']; ?></span>
            <br />
            <span>Genre = <?php echo $userinfo['genre']; ?></span>
            <br />
        </div>
        <div class="Inscrit">
            <a href="editionUser.php" id="edition">
                <span class="thin">Modifier votre </span><span class="thick">profil !</span>
            </a>
        </div>
    </div>
    <script src="JS/headerMenu.js"></script>
</body>

</html>