<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <!--Trois plus recent-->
        <div class="row">
            <h2>3 plus recent</h2>
            <?php
            $sql = "SELECT * FROM t_shirt ORDER BY Date_modification DESC LIMIT 3 ";
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

        <!--Selection-->
        <div class="row">
            <h2>Selection</h2>
            <?php
            $sql = "SELECT * FROM t_shirt ORDER BY rand() LIMIT 3 ";
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