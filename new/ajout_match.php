<?php
   //session_start();


    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";
    $active_match="active";
    $active_jeux_af="active";
	
    $id_equipe =$nom_equipe = $id_equipe_disputer = $nbre_tir = $nbre_but = $msg = $nbre_faute  = $nbre_corner = $nbre_hors_jeux=  $nbre_carton_jaune =$nbre_carton_rouge = $date = $heure_debut_jeux = $heure_fin_jeux = $stade_jeux = $intitule_jeux = $placeholder = $msg0 = "";
    $e = 0;

    // erreurs
    $errors = array("id_equipe"=>"", "id_equipe_disputer"=>"","nom_equipe"=>"","jour_jeux"=>"","heure_debut_jeux"=>"","stade_jeux"=>"","intitule_jeux"=>"");
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		print("ERREUR DE CONNECTION: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";
    
   

    if(isset($_POST["enregistrer"])){
        

        if(empty($_POST['nom_equipe'])){
            $errors['nom_equipe'] = "Vous devez selectionner le nom de l'equipe";
        }else{
            $nom_equipe = $_POST["nom_equipe"];
        }

        if(empty($_POST['id_equipe'])){
            $errors['id_equipe'] = "Vous devez selectionner le l'identifiant de l'equipe de l'equipe";
        }else{
            $id_equipe = $_POST["id_equipe"];
        }

        if(empty($_POST['id_equipe'])){
            $errors['id_equipe'] = "Vous devez selectionner l'identifiant de l'equipe";
        }else{
            $id_equipe_disputer = $_POST["id_equipe"];
        }



        if(empty($_POST['nom_equipe'])){
            $errors['nom_equipe'] = "Vous devez selectionner le nom de l'equipe";
        }else{
            $nom_equipe_disputer = $_POST["nom_equipe"];
        }

        if(empty($_POST['date'])){
            $errors['date'] = "veuillez renseigner la date";
        }else{
            $jour_jeux = $_POST["date"];
        }

        if(empty($_POST['hd'])){
            $errors['hd'] = "veuillez renseigner l'heure de debut";
        }else{
            $heure_debut_jeux = $_POST["hd"];
        }

        if(empty($_POST['stade'])){
            $errors['stade'] = "veuillez renseigner le stade";
        }else{
            $stade_jeux = $_POST["stade"];
        }

        if(empty($_POST['intitule'])){
            $errors['intitule'] = "veuillez renseigner l'intitule";
        }else{
            $intitule_jeux = $_POST["intitule"];
        }



        

        if(array_filter($errors)){
            $msg0 = "alert alert-danger role=alert ";
            $msg = "Le formulaire n'est pas valide";
        }else{
            //select du text
            /*$sql2="SELECT id_equipe FROM equipe WHERE nom_equipe=$nom_equipe";
            $id_equipe=$_POST['id_equipe'];

            $sql2="SELECT id_equipe FROM equipe WHERE nom_equipe=$nom_equipe_disputer";
            $id_equipe_disputer=$_POST['id_equipe'];*/

            $sql = "INSERT INTO jeux (id_equipe,id_equipe_disputer,jour_jeux,heure_debut_jeux,stade_jeux,intitule_jeux) 
                    VALUES ('$id_equipe', '$id_equipe_disputer','$jour_jeux','$heure_debut_jeux','$stade_jeux','$intitule_jeux')";
            
            if(mysqli_query($conn,$sql)){
                $msg0 = "alert alert-success role=alert ";
                $msg = "Insertion reussi";
            }else{
                $msg0 = "alert alert-danger role=alert ";
                $msg = "Insertion echoue";
            }
        }

    }
    
	
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("header.php"); ?>
    <div class="container bg-white" style="max-width:610px;margin-top:60px">
        <center>
            <h3>Nouveau Match</h3>
        </center>
                    
        <form action="ajout_match.php" method="POST">

        <div>
        <?php
        $a="SELECT nom_equipe, id_equipe FROM equipe";
        print_r($a);
        ?>
        </div>

        <div>
                <label><h6>equipe une</h6></label>

                    <?php 
                       /* echo "centering into select";
                        $con = mysqli_connect($servername,$username,$password,$dbname);
                        $sql1="SELECT nom_equipe FROM equipe";
                        $r=mysqli_query($con,$sql1);
                        $result=mysqli_fetch_all($r,MYSQLI_ASSOC);
                        var_dump($result);
                        print_r($result);
                        if($r){
                            echo "connection reussie";
                        }else{
                            echo "connexion echouee".mysqli_connect_error();
                        }
                        var_dump($r);
                        //while($result = $r->fetch()){*/
                        
                        $db=new PDO('mysql:host=127.0.0.1;dbname=championnat','root','',
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ));
                    
                    ?>
                    <select name="nom_equipe" selected="20">
                    <?php
                        $a="SELECT nom_equipe, id_equipe FROM equipe";
                        $w=$db->query($a);
                        while($data=$w->fetch()){
                    ?>
                    <option value="equipe_une"> <?php  
                    echo $data['nom_equipe'];
                    echo "  "; 
                    echo "de matricule:";
                    echo $data['id_equipe']; ?>
                    </option>
                    
                     <?php }
                        if(isset($_POST['nom_equipe'])){
                            /*if($_POST['selection']=="valeur"){
                                echo "vous avez choisie $data";
                            }else{
                                echo "vous n'avez fait aucune selection";
                            }*/
                            $nom_equipe=$_POST['nom_equipe'];
                            $id_equipe=$_POST['id_equipe'];
                        }
                        /*if(!empty($_POST['selection'])){
                            echo "vous avez choisie <b>".$_POST['selection']."</b>";
                        }*/
                      ?>
                </select>
            </div>

            <div>
            <label><h6>equipe deux</h6></label>
            <select name="nom_equipe">
                    <?php
                        $a="SELECT nom_equipe,id_equipe FROM equipe";
                        $w=$db->query($a);
                        while($data=$w->fetch()){
                    ?>
                    <option value="equipe_deux"> <?php  
                    echo $data['nom_equipe'];
                    echo "  "; 
                    echo "de matricule:";
                    echo $data['id_equipe']; ?>
                    </option>
                    
                     <?php } 
                         if(isset($_POST['nom_equipe'])){
                            /*if($_POST['selection']=="valeur"){
                                echo "vous avez choisie $data";
                            }else{
                                echo "vous n'avez fait aucune selection";
                            }*/
                            $nom_equipe_disputer=$_POST['nom_equipe'];
                            $id_equipe_disputer=$_POST['id_equipe'];
                        }
                     ?>
                </select>
            </div>
           
            <div>
            <label><h6>identifiant equipe une</h6></label>
            <select name="id_equipe">
                    <?php
                        $a="SELECT nom_equipe,id_equipe FROM equipe";
                        $w=$db->query($a);
                        while($data=$w->fetch()){
                    ?>
                     <option value="identifiant_une"> <?php  
                    echo $data['id_equipe'];
                    echo "  "; 
                    echo "de nom:";
                    echo $data['nom_equipe']; ?>
                    </option>
                    <?php } 
                         if(isset($_POST['id_equipe'])){
                            $id_equipe=$_POST['id_equipe'];
                            $nom_equipe_disputer=$_POST['nom_equipe'];
                        }
                     ?>
                </select>
            </div>

            <div>
            <label><h6>identifiant equipe deux</h6></label>
            <select name="id_equipe_disputer">
                    <?php
                        $a="SELECT nom_equipe,id_equipe FROM equipe";
                        $w=$db->query($a);
                        while($data=$w->fetch()){
                    ?>
                     <option value="identifiant_deux"> <?php  
                    echo $data['id_equipe'];
                    echo "  "; 
                    echo "de nom:";
                    echo $data['nom_equipe']; ?>
                    </option>
                    <?php } 
                         if(isset($_POST['id_equipe'])){
                            $id_equipe_disputer=$_POST['id_equipe'];
                            $nom_equipe_disputer=$_POST['nom_equipe'];
                            
                        }
                     ?>
                </select>
            </div>

            <div>
                <label><h6>date de Jeux</h6></label>
                <input type="date"  class="form-control" name="date" placeholder="entrez la date du match" value="<?php echo $date; ?>"/>
            </div>

            <div>
                <label><h6>heure de jeux</h6></label>
                <input type="time"  class="form-control" name="hd" placeholder="entrez la l'heure du match" value="<?php echo $heure_debut_jeux; ?>"/>
            </div>

            <div>
                <label><h6>stade</h6></label>
                <input type="text"  class="form-control" name="stade" placeholder="entrez le stade" value="<?php echo $stade_jeux; ?>"/>
            </div>

            <div>
                <label><h6>intitule</h6></label>
                <input type="text"  class="form-control" name="intitule" placeholder="entrez l'intitule" value="<?php echo $intitule_jeux; ?>"/>
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