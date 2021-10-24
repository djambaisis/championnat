<?php 
    //session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";

    $active_joueur="active";
    $active_joueur_affiche="active";
	
    $rows = $login = $password1= $msg1 = $msg2 = $nbre_tir=$nbre_but=$nbre_faute=$nbrehors_jeux=$nbre_corner=$nbre_carton_jaune=$nbre_carton_rouge=  $placeholder = "";
    $x = 1;
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";

        //select des dates
    $sql = "SELECT * FROM joueur";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
?>

<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>
</html>