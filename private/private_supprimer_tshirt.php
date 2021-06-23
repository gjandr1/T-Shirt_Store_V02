<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <?php
                $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID WHERE T.ID=".$_GET['idtshirt'];
                if ($result = $mysqli->query($sql)){
                    if ($produit = $result->fetch_array()){
                        echo '<form action="../DataBase/delete_tshirt.php" method="post">';
                            echo '<div class="form-group">';
                                echo '<div class="col-6">';
                                    echo '<img src="../image/'.$produit['image'].'" alt="">';
                                echo '</div>';
                                echo '<div class="col-6">';
                                    echo '<input type="hidden"  id="ID_tshirt" name="ID_tshirt" value="'.$produit['ID'].'">';
                                    echo '<p>Nom  : '.$produit['Nom_tshirt'].'</p>';
                                    echo '<p>Artiste : '.$produit['Nom_artiste'].' '.$produit['Prenom_artiste'].'</p>';
                                    echo '<p>Prix : '.$produit['Prix'].'€</p>';
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