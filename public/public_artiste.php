<?php require 'public_head.php';?>
<?php require 'public_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<section class="container-fluid">
    <div class="container">
        <?php
            $sql = "SELECT * FROM artiste";
            if ($result = $mysqli->query($sql)){
                while ($produit = $result->fetch_array()){
                    echo " <div class='row Artiste'>";
                        echo " <div class='col-3'><img class='Most-Recent-Img' src='../image/internet.png' alt=''></div>";
                        echo " <div class='col-8'><p>".$produit["Description"]."</p></div>";
                    echo " </div>";
                }
            }
        ?>
    </div>
</section>

<?php require 'footer.php';?>
