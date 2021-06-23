<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <!--Trois plus recent-->
        <div class="row">
            <h2>3 plus recent</h2>
            <?php
            $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID WHERE Date_suppression IS NULL ORDER BY Date_modification DESC LIMIT 3 ";
            if ($result = $mysqli->query($sql)){
                while ($produit = $result->fetch_array()){
                    echo " <div class='col-4 tshirt1'>";
                        echo " <div class='shadow'>";
                            echo " <div>";
                                echo " <a href='public_tshirt.php?idtshirt=".$produit["ID"]."'><img class='Most-Recent-Img' src='../image/".$produit["image"]."' alt=''></a>";
                            echo " </div>";
                            echo "<div>";
                                echo " <p>Nom : ".$produit["Nom_tshirt"]."</p>";
                                echo " <p>Artiste : ".$produit["Nom_artiste"]." ".$produit["Prenom_artiste"]."</p>";
                                echo " <p>Prix : ".$produit["Prix"]."€</p>";
                                echo " <button class='btn btn-primary'>Ajouter</button>";
                            echo " </div>";
                        echo " </div>";
                    echo " </div>";
                }
            }
            ?>

        </div>

        <!--Selection-->
        <div class="row">
            <h2>Selection</h2>
            <?php
            $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID WHERE Date_suppression IS NULL ORDER BY rand() LIMIT 3 ";
            if ($result = $mysqli->query($sql)){
                while ($produit = $result->fetch_array()){
                    echo " <div class='col-4 tshirt1'>";
                        echo " <div class='shadow'>";
                            echo " <div>";
                                echo " <a href='public_tshirt.php?idtshirt=".$produit["ID"]."'><img class='Most-Recent-Img' src='../image/".$produit["image"]."' alt=''></a>";
                            echo " </div>";
                            echo "<div>";
                                echo " <p>Nom : ".$produit["Nom_tshirt"]."</p>";
                                echo " <p>Artiste : ".$produit["Nom_artiste"]." ".$produit["Prenom_artiste"]."</p>";
                                echo " <p>Prix : ".$produit["Prix"]."€</p>";
                                echo " <button class='btn btn-primary'>Ajouter</button>";
                            echo " </div>";
                        echo " </div>";
                    echo " </div>";
                }
            }
            ?>
        </div>

    </div>
</section>

<?php require 'public_footer.php';?>