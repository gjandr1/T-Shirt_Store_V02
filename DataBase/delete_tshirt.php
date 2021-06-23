<?php require '../DataBase/connection_DB.php';?>
<?php
    $sql = "UPDATE t_shirt SET Date_suppression = NOW() WHERE ID= ".$_POST["ID_tshirt"].";";
    if($mysqli->query($sql)) {

        //$message = "Le t-shirt a été ajouté avec succès";
        $message = "succes";

    }
    else {
        $message = "erreur lors de l'ajout";
        $message = "error";
        $erreur = true;
    }
    //var_dump($_POST);
    //echo $sql;

    $mysqli->close();

    $link = "../private/private_liste_tshirt?message=".$message;


    header("location: ".$link);
?>