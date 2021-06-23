<?php require 'private_head.php';?>
<?php require 'private_header.php';?>
<?php require '../DataBase/connection_DB.php';?>

    <Section class="container-fluid">
        <div class="container">
            <h2>Ajouter un artiste</h2>
            <form action="../DataBase/insert_artiste.php" method="post">
                <div class="form-group">
                    <label for="Nom" >Nom :</label>
                    <input type="text" class="form-control" id="Nom" name="Nom">
                </div>
                <div class="form-group">
                    <label for="Prenom" >Prenom :</label>
                    <input type="text" class="form-control" id="Prenom" name="Prenom">
                </div>
                <div class="form-group">
                    <label for="Description" >Description :</label>
                    <textarea class="form-control" name="Description" id="Description" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </Section>


<?php require 'private_footer.php';?>