<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT * FROM  artiste  WHERE ID=".$_GET['idartiste'];
                if ($result = $mysqli->query($sql)){
                    if ($produit = $result->fetch_array()){
                        echo '<form action="../DataBase/delete_artiste.php" method="post">';
                            echo '<div class="form-group">';
                                echo '<div class="col-6">';
                                    echo '<img class="Image_width" src="../image/internet.png" alt="">';
                                echo '</div>';
                                echo '<div class="col-6">';
                                    echo '<input type="hidden"  id="ID_artiste" name="ID_artiste" value="'.$produit['ID'].'">';
                                    echo '<p>Nom  : '.$produit['Nom'].'</p>';
                                    echo '<p>Prenom : '.$produit['Prenom'].'</p>';
                                    echo '<p>Description : '.$produit['Description'].'</p>';
                                    echo '<button type="submit" class="btn btn-danger">Supprimer</button>';
                                echo '</div>';
                            echo '</div>';
                        echo '</form>';
                    }
                }
                ?>
            </div>
        </div>
    </section>


<?php require 'private_footer.php';?>