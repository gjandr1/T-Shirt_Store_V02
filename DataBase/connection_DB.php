<?php
date_default_timezone_set('Europe/Brussels');
require 'acces.php';

$erreur = false;
$message = "";

if (!$erreur){
    if ($mysqli = new mysqli($host_db, $user_db, $pass_db, $nom_db)){

    }
    else {
        $message = "erreur de connexion";
        $erreur = true;
    }

}
?>