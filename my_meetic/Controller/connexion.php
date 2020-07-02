<?php
session_start();

require "../Model/Database.php";
class Connect extends Database {

    public function Connexion() {

        if (isset($_POST['formconnexion'])) {
            $mailconnect = htmlspecialchars($_POST['mailconnect']);
            $mdpconnect = sha1($_POST['mdpconnect']);
            if (!empty($mailconnect) and !empty($mdpconnect)) {

                require "../Model/connexionReq.php";

                if ($userexist == 1) {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['mail'] = $userinfo['pseudo'];
                    header("Location: ../View/profilUser.php?id=" . $_SESSION['id']);
                } else {
                    return "Mail ou mot de passe incorrect !";
                }
            } else {
                return "Tous les champs doivent être complétés !";
            }
        }
    }
}