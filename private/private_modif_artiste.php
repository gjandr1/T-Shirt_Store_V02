<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

    <Section class="container-fluid">
        <div class="container">
            <?php
            $sql = "SELECT * FROM artiste WHERE ID = ".$_GET['idartiste'];
            if ($result = $mysqli->query($sql)){
                if ($produit = $result->fetch_array()){
                    echo '<form action="../DataBase/update_artiste.php" method="post">';
                        echo '<div class="form-group">';
                            echo '<label for="Nom" >Nom :</label>';
                            echo '<input type="hidden"  id="ID_artiste" name="ID_artiste" value="'.$produit['ID'].'">';
                            echo '<input type="text" class="form-control" id="Nom" name="Nom" value="'.$produit['Nom'].'">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Prenom" >Prenom :</label>';
                            echo '<input type="text" class="form-control" id="Prenom" name="Prenom" value="'.$produit['Prenom'].'">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Description" >Description :</label>';
                            echo '<textarea class="form-control" name="Description" id="Description" cols="30" rows="5" value="'.$produit['Description'].'"></textarea>';
                        echo '</div>';

                        echo '<button type="submit" class="btn btn-primary">Submit</button>';
                    echo '</form>';
                }
            }
            ?>
        </div>
    </Section>


<?php require 'private_footer.php';?>