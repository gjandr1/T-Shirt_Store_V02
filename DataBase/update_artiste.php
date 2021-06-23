<?php require '../DataBase/connection_DB.php';?>

<?php

$sql = "UPDATE artiste SET ";
$virgule = " ";
//Nom
if(isset($_POST["Nom"]) and trim($_POST["Nom"]) != "") {
    $sql .= $virgule."Nom = '".str_replace("'","\'",$_POST["Nom"])."' ";
    $virgule = ", ";
}
//Prenom
if(isset($_POST["Prenom"]) and trim($_POST["Prenom"]) != "") {
    $sql .= $virgule."Prenom = '".str_replace("'","\'",$_POST["Prenom"])."' ";
    $virgule = ", ";
}
//Description
if(isset($_POST["Description"]) and trim($_POST["Description"]) != "") {
    $sql .= $virgule."Description = '".str_replace("'","\'",$_POST["Description"])."' ";
    $virgule = ", ";
}
$sql .= " WHERE ID= ".$_POST["ID_artiste"].";";



if($mysqli->query($sql)) {

    //$message = "Le t-shirt a été ajouté avec succès";
    $message = "succes";

}
else {
    $message = "erreur lors de l'ajout";
    $message = "error";
    $erreur = true;
}
var_dump($_POST);
echo $sql;

$mysqli->close();

$link = "../private/private_liste_artiste?message=".$message;


header("location: ".$link);
?>
