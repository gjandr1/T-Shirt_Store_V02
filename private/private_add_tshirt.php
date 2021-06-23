<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

<Section class="container-fluid">
    <div class="container">
        <h2>Ajouter un T-shirt</h2>
        <form action="../DataBase/insert_tshirt.php" method="post">
            <div class="form-group">
                <label for="Nom" >Nom :</label>
                <input type="text" class="form-control" id="Nom" name="Nom">
            </div>
            <div class="form-group">
                <label for="Artiste" >Artiste :</label>
                <select name="ArtisteListe" id="Artiste" class="form-control">
                    <?php
                    $sql = "SELECT * FROM artiste ORDER BY Nom, Prenom";
                    if ($result = $mysqli->query($sql)){
                        while ($produit = $result->fetch_array()){
                            echo '<option value="'.$produit['ID'].'">'.$produit['Nom'].' '.$produit['Prenom'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Image" >Image :</label>
                <input type="file" class="form-control-file border form-control" id="Image" name="Image">
            </div>
            <div class="form-group">
                <label for="Prix" >Prix :</label>
                <input type="text" class="form-control" id="Prix" name="Prix">
            </div>
            <div class="form-group">
                <label for="Categorie" >Categorie :</label>
                <select name="CategorieListe" id="Categorie" class="form-control">
                    <?php
                    $sql = "SELECT * FROM categories ORDER BY libelle";
                    if ($result = $mysqli->query($sql)){
                        while ($produit = $result->fetch_array()){
                            echo '<option value="'.$produit['ID'].'">'.$produit['Libelle'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Genre" >Genre :</label>
                <select name="GenreListe" id="Genre" class="form-control">
                    <?php
                    $sql = "SELECT * FROM genre";
                    if ($result = $mysqli->query($sql)){
                        while ($produit = $result->fetch_array()){
                            echo '<option value="'.$produit['ID'].'">'.$produit['Libelle'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>


        </form>

    </div>

</Section>


<?php require 'private_footer.php';?>