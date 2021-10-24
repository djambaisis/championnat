<?php
   //session_start();


    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";
    $active_joueur="active";
    $active_joueur_af="active";
	
    $id_equipe = $nom_joueur = $prenom_joueur = $msg = $date_nai_joueur = $tel_joueur = $adresse_joueur = $nbre_but_joueur = $taille = $position =$placeholder =$msg0 = "";
    $e = 0;

    // erreurs
    $errors = array("id_equipe"=>"","nom_joueur"=>"", "prenom_joueur"=>"","date_nai_joueur"=>"","tel_joueur"=>"","adresse_joueur"=>"","nbre_but_joueur"=>"","taille"=>"","position"=>"");
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";
    
    

    if(isset($_POST["enregistrer"])){

        if(empty($_POST['id3'])){
            $errors['id3'] = "indiquer l'indentifiant";
        }else{
            $id_equipe = $_POST["id3"];
        }

        if(empty($_POST['nom'])){
            $errors['nom'] = "indiquer le nom du joueur";
        }else{
            $nom_joueur = $_POST["nom"];
        }

        if(empty($_POST['prenom'])){
            $errors['prenom'] = "indiquer le prenom du joueur";
        }else{
            $prenom_joueur = $_POST["prenom"];
        }

        if(empty($_POST['dnj'])){
            $errors['dnj'] = "indiquer la date de naissance du joueur";
        }else{
            $date_nai_joueur = $_POST["dnj"];
        }

        if(empty($_POST['tel'])){
            $errors['tel'] = "indiquer le numero du joueur";
        }else{
            $tel_joueur = $_POST["tel"];
        }

        if(empty($_POST['adresse'])){
            $errors['adresse'] = "indiquer l'adresse du joueur";
        }else{
            $adresse_joueur = $_POST["adresse"];
        }

        if(empty($_POST['but'])){
            $errors['but'] = "indiquer le nombre de but du joueur";
        }else{
            $nbre_but_joueur = $_POST["but"];
        }

        if(empty($_POST['taille'])){
            $errors['taille'] = "indiquer la taille du joueur";
        }else{
            $taille = $_POST["taille"];
        }

        if(empty($_POST['position'])){
            $errors['position'] = "indiquer la position du joueur";
        }else{
            $position = $_POST["position"];
        }


        if(array_filter($errors)){
            $msg0 = "alert alert-danger role=alert ";
            $msg = "Le formulaire n'est pas valide";
        }else{
            //select du text
            $sql = "INSERT INTO joueur (id_equipe,nom_joueur,prenom_joueur,date_nai_joueur,tel_joueur,adresse_joueur,nbre_but_joueur,taille,position)
                    VALUES ('$id_equipe','$nom_joueur', '$prenom_joueur','$date_nai_joueur','$tel_joueur','$adresse_joueur','$nbre_but_joueur','$taille','$position')";
            
            if(mysqli_query($conn,$sql)){
                $msg0 = "alert alert-success role=alert ";
                $msg = "Insertion reussi";
            }else{
                $msg0 = "alert alert-danger role=alert ";
                $msg = "Insertion echoue";
            }
        }

    }
    
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("header.php"); ?>
    <div class="container bg-white" style="max-width:610px;margin-top:60px">
        <center>
            <h3>Nouveau joueur</h3>
        </center>
        <form action="ajout_joueur.php" method="POST">

            <div>
                <label><h6>L'indentifiant de son equipe</h6></label>
                <input type="number"  class="form-control" name="id3" placeholder="entrez l'identifiant" value="<?php echo $id_equipe; ?>"/>
            </div>

            <div>
                <label><h6>Nom du Joueur</h6></label>
                <input type="text"  class="form-control" name="nom" placeholder="Entrez le nom du joueur" value="<?php echo $nom_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Prenom du Joueur</h6></label>
                <input type="text"  class="form-control" name="prenom" placeholder="entrez le prenom du joueur" value="<?php echo $prenom_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Date de Naissance du Joueur</h6></label>
                <input type="date"  class="form-control" name="dnj" placeholder="Entrez la date de naissance du Joueur" value="<?php echo $date_nai_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Telephone du Joueur</h6></label>
                <input type="text"  class="form-control" name="tel" placeholder="Entrez le numero de telephone du joueur" value="<?php echo $tel_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Adresse du Joueur</h6></label>
                <input type="text"  class="form-control" name="adresse" placeholder="Entrez l'adressse du joueur" value="<?php echo $adresse_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Nombre de But du Joueur </h6></label>
                <input type="int"  class="form-control" name="but" placeholder="Entrez le nombre de but du joueur" value="<?php echo $nbre_but_joueur; ?>"/>
            </div>

            <div>
                <label><h6>Taille du Joueur</h6></label>
                <input type="text"  class="form-control" name="taille" placeholder="Entrez la taille du joueur" value="<?php echo $taille; ?>"/>
            </div>

            <div>
                <label><h6>Position</h6></label>
                <input type="text"  class="form-control" name="position" placeholder="Entrez la position du joueur" value="<?php echo $position; ?>"/>
            </div>

            <center style="margin-top:5%">
                <input type="submit" value="Enregistrer" class="btn btn-primary" name="enregistrer"/>
            </center>
            <div class="<?php echo $msg0; ?>">
                <?php 
                    echo $msg ;
                ?>
            </div>
        </form>
    </div>
</body>
</html>