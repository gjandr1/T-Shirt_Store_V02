<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <h2>Tout les artistes</h2>
        <?php
        $sql = "SELECT * FROM artiste ORDER BY Date_Supression, Nom,Prenom";
        if ($result = $mysqli->query($sql)){
            while ($produit = $result->fetch_array()){
                echo " <div class='row Artiste'>";
                    echo " <div class='col-3'><img class='Most-Recent-Img' src='../image/internet.png' alt=''></div>";
                    echo " <div class='col-8'>";
                        echo " <h2 class=''>".$produit["Nom"]." ".$produit["Prenom"]."</h2>";
                        echo " <p>".$produit["Description"]."</p>";

                        if ($produit["Date_Supression"] == NULL){
                            echo " <a class='btn btn-primary' href='private_modif_artiste.php?idartiste=".$produit["ID"]."'>Modifier</a>";
                            echo " <a class='btn btn-danger' href='private_supprimer_artiste.php?idartiste=".$produit["ID"]."'>Supprimer</a>";
                        }
                        else{
                            echo " <a class='btn btn-success' href='../DataBase/redo_artiste.php?ID_artiste=".$produit["ID"]."'>Redo</a>";
                        }
                    echo "</div>";
                echo " </div>";
            }
        }
        ?>
    </div>
</section>

<?php require 'private_footer.php';?>
