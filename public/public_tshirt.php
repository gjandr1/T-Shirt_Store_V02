<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT T.ID, T.Nom AS Nom_tshirt, A.Nom AS Nom_artiste, A.Prenom AS Prenom_artiste, T.Prix, T.image FROM t_shirt AS T INNER JOIN artiste AS A ON T.ID_artiste=A.ID WHERE T.ID=".$_GET['idtshirt'];
            if ($result = $mysqli->query($sql)){
                if ($produit = $result->fetch_array()){
                    echo '<div class="col-6">';
                        echo '<img src="../image/'.$produit['image'].'" alt="">';
                    echo '</div>';
                    echo '<div class="col-6">';
                        echo '<p>Nom  : '.$produit['Nom_tshirt'].'</p>';
                        echo '<p>Artiste : '.$produit['Nom_artiste'].' '.$produit['Prenom_artiste'].'</p>';
                        echo '<div class="dropdown">';
                            echo '<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Taille';
                            echo '<span class="caret"></span></button>';
                            echo '<ul class="dropdown-menu">';
                                echo '<li><a href="#">S</a></li>';
                                echo '<li><a href="#">M</a></li>';
                                echo '<li><a href="#">L</a></li>';
                                echo '<li><a href="#">XL</a></li>';
                            echo '</ul>';
                        echo '</div>';
                        echo '<p>Prix : '.$produit['Prix'].'€</p>';
                        echo '<button class="btn btn-success">Ajouter</button>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php require 'public_footer.php';?>
