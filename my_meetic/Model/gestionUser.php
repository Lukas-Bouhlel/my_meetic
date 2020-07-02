<?php

include "../Model/Database.php";
session_start();
class Gestion extends Database {
    public function Gestion() {
        if(isset($_SESSION['id'])){
            $getid = intval($_SESSION['id']);
            $requser = $this->connect()->prepare('SELECT * FROM membres WHERE id = ?');
            $requser->bindParam(1, $getid);
            $requser->execute();
            return $requser->fetch();
        }
    }
}
?>