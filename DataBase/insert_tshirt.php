<?php require '../DataBase/connection_DB.php';?>
<?php

    $sql = "INSERT INTO t_shirt (Nom, ID_artiste, image, Prix, ID_categorie, ID_genre, Date_modification) VALUES (";
    $virgule = " ";
    //Nom
    if(isset($_POST["Nom"]) and trim($_POST["Nom"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["Nom"])."' ";
        $virgule = ", ";
    }
    //Artiste
    if(isset($_POST["ArtisteListe"]) and trim($_POST["ArtisteListe"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["ArtisteListe"])."' ";
        $virgule = ", ";
    }
    //Image
    if(isset($_POST["Image"]) and trim($_POST["Image"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["Image"])."' ";
        $virgule = ", ";
    }
    //Prix
    if(isset($_POST["Prix"]) and trim($_POST["Prix"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["Prix"])."' ";
        $virgule = ", ";
    }
    //Categorie
    if(isset($_POST["CategorieListe"]) and trim($_POST["CategorieListe"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["CategorieListe"])."' ";
        $virgule = ", ";
    }
    //Genre
    if(isset($_POST["GenreListe"]) and trim($_POST["GenreListe"]) != "") {
        $sql .= $virgule."'".str_replace("'","\'",$_POST["GenreListe"])."' ";
        $virgule = ", ";
    }
    $sql .= $virgule."NOW()); ";

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

    $link = "../private/private_add_tshirt?message=".$message;


    header("location: ".$link);

?>
