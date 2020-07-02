<?php

$reqmail = $this->connect()->prepare("SELECT * FROM membres WHERE email = ?");
$reqmail->bindParam(1, $mail);
$reqmail->execute();
$mailexist = $reqmail->rowCount();