<?php
   //session_start();


    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";
    $active_equipe="active";
    $active_equipe_aj="active";
	
    $nom =$classement =$msg =$placeholder =$msg0 = "";
    $e = 0;

    // erreurs
    $errors = array("nom"=>"", "classement"=>"");
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";
    
    

    if(isset($_POST["enregistrer"])){

        if(empty($_POST['nom'])){
            $errors['nom'] = "Vous devez entrez un nom pour l'equipe";
        }else{
            $nom = $_POST["nom"];
        }

        if(empty($_POST['class'])){
            $errors['class'] = "Vous devez entrer un rang";
        }else{
            $classement = $_POST["class"];
        }


        if(array_filter($errors)){
            $msg0 = "alert alert-danger role=alert ";
            $msg = "Le formulaire n'est pas valide";
        }else{
            //select du text
            $sql = "INSERT INTO equipe (nom_equipe,classement)
                    VALUES ('$nom', '$classement')";
            
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
            <h3>Nouvelle Equipe</h3>
        </center>
        <form action="ajout_equipe.php" method="POST">
            <div>
                <label><h6>Nom</h6></label>
                <input type="text"  class="form-control" name="nom" placeholder="Entrez le nom de l'equipe" value="<?php echo $nom; ?>"/>
            </div>
            <div>
                <label><h6>Classement</h6></label>
                <input type="text"  class="form-control" name="class" placeholder="Entrez le rang de lequipe" value="<?php echo $classement; ?>"/>
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