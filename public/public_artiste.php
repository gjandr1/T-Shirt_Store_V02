<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <?php
            $sql = "SELECT * FROM artiste WHERE Date_Supression IS NULL ORDER BY Nom,Prenom";
            if ($result = $mysqli->query($sql)){
                while ($produit = $result->fetch_array()){
                    echo " <div class='row Artiste'>";
                        echo " <div class='col-3'><img class='Most-Recent-Img' src='../image/internet.png' alt=''></div>";
                        echo " <div class='col-8'>";
                            echo " <h2 class=''>".$produit["Nom"]." ".$produit["Prenom"]."</h2>";
                            echo " <p>".$produit["Description"]."</p>";
                        echo "</div>";
                    echo " </div>";
                }
            }
        ?>
    </div>
</section>

<?php require 'public_footer.php';?>
