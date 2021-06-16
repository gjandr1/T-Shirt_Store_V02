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
                    $sql = "SELECT * FROM t_shirt WHERE ID_categorie = ".$_GET['idcategorie'];
                }
                else{
                    $sql = "SELECT * FROM t_shirt ";
                }

                if ($result = $mysqli->query($sql)){
                    while ($produit = $result->fetch_array()){
                        echo " <div class='col-4 tshirt1'>";
                            echo " <div class='shadow'>";
                                echo " <div>";
                                    echo " <a href='public_tshirt.php?idtshirt=".$produit["ID"]."'><img class='Most-Recent-Img' src='../image/".$produit["image"].".jpeg' alt=''></a>";
                                echo " </div>";
                                echo "<div>";
                                    echo " <p>".$produit["Nom"]."</p>";
                                    echo " <p>Nom du créateur</p>";
                                    echo " <p>".$produit["Prix"]."€</p>";
                                    echo " <button>Ajouter</button>";
                                echo " </div>";
                            echo " </div>";
                        echo " </div>";
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php require 'footer.php';?>
