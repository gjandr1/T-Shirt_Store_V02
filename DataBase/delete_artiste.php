<?php require '../DataBase/connection_DB.php';?>
<?php
$sql = "UPDATE artiste SET Date_Supression = NOW() WHERE ID= ".$_POST["ID_artiste"].";";
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

$link = "../private/private_liste_artiste?message=".$message;


header("location: ".$link);
?>