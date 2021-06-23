<?php require '../DataBase/connection_DB.php';?>
<?php

$sql = "INSERT INTO artiste (Nom, Prenom, Description) VALUES (";
$virgule = " ";
//Nom
if(isset($_POST["Nom"]) and trim($_POST["Nom"]) != "") {
    $sql .= $virgule."'".str_replace("'","\'",$_POST["Nom"])."' ";
    $virgule = ", ";
}
//Prenom
if(isset($_POST["Prenom"]) and trim($_POST["Prenom"]) != "") {
    $sql .= $virgule."'".str_replace("'","\'",$_POST["Prenom"])."' ";
    $virgule = ", ";
}
//Description
if(isset($_POST["Description"]) and trim($_POST["Description"]) != "") {
    $sql .= $virgule."'".str_replace("'","\'",$_POST["Description"])."' );";
}

if($mysqli->query($sql)) {

    //$message = "L artiste a été ajouté avec succès";
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

$link = "../private/private_add_artiste?message=".$message;


header("location: ".$link);

?>
