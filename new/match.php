<?php 
    //session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";

    $active_match="active";
    $active_match_affiche="active";
	
    $rows = $login = $password1= $msg1 = $msg2 =  $placeholder = "";
    
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";

        //select des dates
    $sql1="SELECT equipe.nom_equipe,equipe.id_equipe,jeux.id_equipe,jeux.id_equipe_disputer,jour_jeux,heure_debut_jeux,stade_jeux,intitule_jeux FROM equipe INNER JOIN jeux ON  equipe.id_equipe=jeux.id_equipe OR equipe.id_equipe=jeux.id_equipe_disputer";
    

    $result = mysqli_query($conn,$sql1);
    //$result1=mysqli_query($conn,$sql2);

    if(mysqli_num_rows($result)>0){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    //if(mysqli_num_rows($result1)>0){
        //$rows = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                
            
?>

<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>

    <div class="container-fluid bg-white" style="margin-top:50px;max-width:2000px">
        <center><h4>Match</h4></center>
        <div class="row" style="margin-top:5%">
            <table class="table table-striped">
                <thead>
                <tr>
                        <th scope="col">equipes domicile</th>
                        <th scope="col">equipes exterieur</th>
                        <th scope="col">jour du jeux</th>
                        <th scope="col">heure</th>
                        <th scope="col">stade jeux</th>
                        <th scope="col">intitule jeux</th>
                        <th scope="col">supprimer</th>
                        
                </tr>
                </thead>
                <tbody>
                        <?php  
                        $i=0;
                        foreach($rows as $row){ 
                            if($i==0){
                                $x=$row['nom_equipe'];
                                $a=$row['jour_jeux'];
                                $b=$row['heure_debut_jeux'];
                                $c=$row['stade_jeux'];
                                $d=$row['intitule_jeux'];
                            }
                            if($i==1){
                                $z=$row['nom_equipe'];

                            
                        ?>
                    
                            <tr >
                            
                                <td><?php echo $x; ?> </td>
                                <td><?php echo $z; ?> </td>
                                <td><?php echo $a; ?> </td>
                                <td><?php echo $b; ?> </td>
                                <td><?php echo $c; ?> </td>
                                <td><?php echo $d; ?> </td>
                                <td rowspan="1"><a href="supprimer.php?id=<?php echo $row['id_jeux']; ?> " class="btn btn-outline-danger"> Supprimer </a> </td>
                            </tr>
                        <?php 
                           // $x = $x +1;
                            }
                            if ($i==0){
                                $i++;
                            }
                            else{
                                $i==0;
                            }

                        }
                        ?>
                </tbody>
            </table>
    </body>
</html>

<?php
    }
    else{
?>
<!DOCTYPE html>
<html>
<?php
    include("header.php");
?>
        <div class="container bg-white" style="margin-top:50px">
        <center><h4>Matchs Programmes</h4></center>
        <div class="row" style="margin-top:5%">
            <table class="table">
                <thead>
                <tr>
                        <th scope="col">equipe domicile</th>
                        <th scope="col">equipe exterieur</th>
                        <th scope="col">date</th>
                        <th scope="col">heure</th>
                        <th scope="col">stade</th>
                        <th scope="col">intitule</th>
                        <th scope="col">supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <td><center> - </center></td>
                    <td><center> - </center></td>
                    <td><center> - </center></td>
                    <td><center> - </center></td>
                    <td><center> - </center></td>
                    <td><center> - </center></td>
                </tbody>
            </table>
    </body>
</html>
<?php 
    }
    mysqli_free_result($result);
    
	
    mysqli_close($conn);
?>
