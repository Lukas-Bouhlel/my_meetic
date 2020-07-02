<?php

$requser = $this->connect()->prepare("SELECT * FROM membres WHERE email = ? AND mot_de_passe = ?");
$requser->bindParam(1, $mailconnect);
$requser->bindParam(2, $mdpconnect);
$requser->execute();
$userexist = $requser->rowCount();

?>