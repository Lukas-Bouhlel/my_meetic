<?php
    $insertmbr = $this->connect()->prepare("INSERT INTO membres (nom, prenom, email, mot_de_passe, ville, date_de_naissance, genre, date_de_creation) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())");                          
    $insertmbr->bindParam(1, $nom);
    $insertmbr->bindParam(2, $prenom);
    $insertmbr->bindParam(3, $mail);
    $insertmbr->bindParam(4, $mdp);
    $insertmbr->bindParam(5, $ville);
    $insertmbr->bindParam(6, $date);
    $insertmbr->bindParam(7, $genre);
    $insertmbr->execute();
    header('Location: ../View/connexionUser.php');