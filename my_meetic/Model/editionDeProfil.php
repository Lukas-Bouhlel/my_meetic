<?php

include "../Model/Database.php";
class Edition extends Database {
    public function data_member() {
        if(isset($_SESSION['id'])){
            $requser = $this->connect()->prepare("SELECT * FROM membres WHERE id = ?");
            $requser->bindParam(1, $_SESSION['id'], PDO::PARAM_INT);
            $requser->execute();
            return $requser->fetch();
        }
    }
    public function Edition() {

        if(isset($_SESSION['id']))
        {
            $requser = $this->connect()->prepare("SELECT * FROM membres WHERE id = ?");
            $requser->bindParam(1, $_SESSION['id'], PDO::PARAM_INT);
            $requser->execute();
            $user = $requser->fetch();

            if(isset($_POST['newPrenom']) AND !empty($_POST['newPrenom']) AND $_POST['newPrenom'] != $user['prenom'])
            {
                $newprenom = htmlspecialchars($_POST['newPrenom']);
                $insertprenom = $this->connect()->prepare("UPDATE membres SET prenom = ? WHERE id = ?");
                $insertprenom->bindParam(1, $newprenom);
                $insertprenom->bindParam(2, $_SESSION['id']);
                $insertprenom->execute();
                header("Location: profilUser.php?id=".$_SESSION['id']);
            
            }

            if(isset($_POST['newNom']) AND !empty($_POST['newNom']) AND $_POST['newNom'] != $user['nom'])
            {
                $newprenom = htmlspecialchars($_POST['newNom']);
                $insertprenom = $this->connect()->prepare("UPDATE membres SET nom = ? WHERE id = ?");
                $insertprenom->bindParam(1, $newprenom);
                $insertprenom->bindParam(2, $_SESSION['id']);
                $insertprenom->execute();
                header("Location: profilUser.php?id=".$_SESSION['id']);
            
            }
            
            if(isset($_POST['newVille']) AND !empty($_POST['newVille']) AND $_POST['newVille'] != $user['ville'])
            {
                $newprenom = htmlspecialchars($_POST['newVille']);
                $insertprenom = $this->connect()->prepare("UPDATE membres SET ville = ? WHERE id = ?");
                $insertprenom->bindParam(1, $newprenom);
                $insertprenom->bindParam(2, $_SESSION['id']);
                $insertprenom->execute();
                header("Location: profilUser.php?id=".$_SESSION['id']);
            
            }

            if(isset($_POST['newMail']) AND !empty($_POST['newMail']) AND $_POST['newMail'] != $user['email'])
            {
                $newprenom = htmlspecialchars($_POST['newMail']);
                $insertprenom = $this->connect()->prepare("UPDATE membres SET email = ? WHERE id = ?");
                $insertprenom->bindParam(1, $newprenom);
                $insertprenom->bindParam(2, $_SESSION['id']);
                $insertprenom->execute();
                header("Location: profilUser.php?id=".$_SESSION['id']);
            
            }

            if(isset($_POST['newMdp']) AND !empty($_POST['newMdp']) AND isset($_POST['newMdp2']) AND !empty($_POST['newMdp2']))
            {
                $mdp = sha1($_POST['newMdp']);
                $mdp2 = sha1($_POST['newMdp2']);

                if($mdp == $mdp2)
                {
                    $insertmdp = $this->connect()->prepare("UPDATE membres SET mot_de_passe = ? WHERE id = ?");
                    $insertmdp->bindParam(1, $mdp);
                    $insertmdp->bindParam(2, $_SESSION['id']);
                    $insertmdp->execute();
                    header("Location: profilUser.php?id=".$_SESSION['id']);
                
                }else{
                    return "Vos deux mots de passe ne correspondent pas !";
                }
            }
            
            else if(isset($_POST['newPrenom']) AND $_POST['newPrenom'] == $user['prenom'])
            {
                header("Location: profilUser.php?id=".$_SESSION['id']);
            }

        }else{
            header("location: connexionUser.php");
        }
    }
}
?>