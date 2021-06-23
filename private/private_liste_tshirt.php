<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <h2>Tout les t-shirt</h2>
            <?php
            $sql = "SELECT * FROM t_shirt ORDER BY Date_suppression";
            if ($result = $mysqli->query($sql)){
                while ($produit = $result->fetch_array()){
                    echo " <div class='col-4 tshirt1'>";
                        echo " <div class='shadow'>";
                            echo " <div>";
                                echo " <a href='#'><img class='Most-Recent-Img' src='../image/".$produit["image"]."' alt=''></a>";
                            echo " </div>";
                            echo "<div>";
                                echo " <p>".$produit["Nom"]."</p>";
                                echo " <p>Nom du créateur</p>";
                                echo " <p>".$produit["Prix"]."€</p>";

                                if ($produit["Date_suppression"] == NULL){
                                    echo " <a class='btn btn-primary' href='private_modif_tshirt.php?idtshirt=".$produit["ID"]."'>Modifier</a>";
                                    echo " <a class='btn btn-danger' href='private_supprimer_tshirt.php?idtshirt=".$produit["ID"]."'>Supprimer</a>";
                                }
                                else{
                                    echo " <a class='btn btn-success' href='../DataBase/redo_tshirt.php?ID_tshirt=".$produit["ID"]."'>Redo</a>";
                                }

                            echo " </div>";
                        echo " </div>";
                    echo " </div>";
                }
            }
            ?>

        </div>
    </div>
</section>


<?php require 'private_footer.php';?>
