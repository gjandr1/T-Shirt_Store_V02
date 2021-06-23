<?php require '../DataBase/connection_DB.php';?>

<?php
    $sql = "UPDATE t_shirt SET ";
    $virgule = " ";
    //Nom
    if(isset($_POST["Nom"]) and trim($_POST["Nom"]) != "") {
        $sql .= $virgule."Nom = '".str_replace("'","\'",$_POST["Nom"])."' ";
        $virgule = ", ";
    }
    //Artiste
    if(isset($_POST["ArtisteListe"]) and trim($_POST["ArtisteListe"]) != "") {
        $sql .= $virgule."ID_artiste = '".str_replace("'","\'",$_POST["ArtisteListe"])."' ";
        $virgule = ", ";
    }
    //Image
    if(isset($_POST["Image"]) and trim($_POST["Image"]) != "") {
        $sql .= $virgule."image = '".str_replace("'","\'",$_POST["Image"])."' ";
        $virgule = ", ";
    }
    //Prix
    if(isset($_POST["Prix"]) and trim($_POST["Prix"]) != "") {
        $sql .= $virgule."Prix = '".str_replace("'","\'",$_POST["Prix"])."' ";
        $virgule = ", ";
    }
    //Categorie
    if(isset($_POST["ID_categorie"]) and trim($_POST["CategorieListe"]) != "") {
        $sql .= $virgule."Nom = '".str_replace("'","\'",$_POST["CategorieListe"])."' ";
        $virgule = ", ";
    }
    //Genre
    if(isset($_POST["GenreListe"]) and trim($_POST["GenreListe"]) != "") {
        $sql .= $virgule."ID_genre = '".str_replace("'","\'",$_POST["GenreListe"])."' ";
        $virgule = ", ";
    }
    $sql .= $virgule."Date_modification = NOW() WHERE ID= ".$_POST["ID_tshirt"].";";

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
