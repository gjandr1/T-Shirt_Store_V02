<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>


<section class="container-fluid">
    <div class="container">
        <!--Tout les T-Shirt -->
        <div class="row">
            <h2>Tout les T-Shirt</h2>
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Catégorie
                </button>
                <div class="dropdown-menu">
                    <?php
                    $sql = "SELECT * FROM categories";
                    if ($result = $mysqli->query($sql)){
                        while ($produit = $result->fetch_array()){
                            echo '<a href="?idcategorie='.$produit['ID'].'" class="dropdown-item">'.$produit['Libelle'].'</a>';
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
                if (isset($_GET['idcategorie'])){
                    $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID  WHERE Date_suppression IS NULL AND ID_categorie = ".$_GET['idcategorie'];
                }
                else{
                    $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID  WHERE Date_suppression IS NULL ";
                }

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
