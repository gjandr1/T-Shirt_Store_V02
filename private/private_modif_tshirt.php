<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

    <Section class="container-fluid">
        <div class="container">
            <?php
            $sql1 = "SELECT * FROM t_shirt WHERE ID = ".$_GET['idtshirt'];
            if ($result1 = $mysqli->query($sql1)){
                if ($produit1 = $result1->fetch_array()){
                    echo '<form action="../DataBase/update_tshirt.php" method="post">';
                        echo '<div class="form-group">';
                           echo '<label for="Nom" >Nom :</label>';
                            echo '<input type="hidden"  id="ID_tshirt" name="ID_tshirt" value="'.$produit1['ID'].'">';
                            echo '<input type="text" class="form-control" id="Nom" name="Nom" value="'.$produit1['Nom'].'">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Artiste" >Artiste :</label>';
                            echo '<select name="ArtisteListe" id="Artiste" class="form-control">';
                            $sql = "SELECT * FROM artiste ORDER BY Nom, Prenom";
                            if ($result = $mysqli->query($sql)){
                                while ($produit = $result->fetch_array()){
                                    if ($produit['ID']==$produit1['ID_artiste']){
                                        echo '<option value="'.$produit['ID'].'" selected>'.$produit['Nom'].' '.$produit['Prenom'].'</option>';
                                    }
                                    else{
                                        echo '<option value="'.$produit['ID'].'">'.$produit['Nom'].' '.$produit['Prenom'].'</option>';
                                    }
                                }
                            }
                            echo '</select>';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Image" >Image :</label>';
                            echo '<input type="file" class="form-control-file border form-control" id="Image" name="Image" value="'.$produit1['image'].'">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Prix" >Prix :</label>';
                            echo '<input type="text" class="form-control" id="Prix" name="Prix" value="'.$produit1['Prix'].'">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Categorie" >Categorie :</label>';
                            echo '<select name="CategorieListe" id="Categorie" class="form-control">';
                            $sql2 = "SELECT * FROM categories";
                            if ($result2 = $mysqli->query($sql2)){
                                while ($produit2 = $result2->fetch_array()){
                                    if ($produit2['ID']==$produit1['ID_categorie']){
                                        echo '<option value="'.$produit2['ID'].'" selected>'.$produit2['Libelle'].'</option>';
                                    }
                                    else{
                                        echo '<option value="'.$produit2['ID'].'">'.$produit2['Libelle'].'</option>';
                                    }
                                }
                            }
                            echo '</select>';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<label for="Genre" >Genre :</label>';
                            echo '<select name="GenreListe" id="Genre" class="form-control">';
                            $sql3 = "SELECT * FROM genre";
                            if ($result3 = $mysqli->query($sql3)){
                                while ($produit3 = $result3->fetch_array()){
                                    if ($produit3['ID']==$produit1['ID_genre']){
                                        echo '<option value="'.$produit3['ID'].'" selected>'.$produit3['Libelle'].'</option>';
                                    }
                                    else{
                                        echo '<option value="'.$produit3['ID'].'">'.$produit3['Libelle'].'</option>';
                                    }
                                }
                            }
                            echo '</select>';
                        echo '</div>';
                        echo '<button type="submit" class="btn btn-primary">Submit</button>';
                    echo '</form>';
                }
            }
            ?>
        </div>
    </Section>


<?php require 'private_footer.php';?>