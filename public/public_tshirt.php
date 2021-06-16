<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM t_shirt WHERE ID = ".$_GET['idtshirt'];
            if ($result = $mysqli->query($sql)){
                if ($produit = $result->fetch_array()){
                    echo '<div class="col-6">';
                        echo '<img src="../image/'.$produit['image'].'.jpeg" alt="">';
                    echo '</div>';
                    echo '<div class="col-6">';
                        echo '<p>Nom  : '.$produit['Nom'].'</p>';
                        echo '<p>Artiste : '.$produit['ID_artiste'].'</p>';
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
                        echo '<button>Ajouter</button>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php require 'footer.php';?>
