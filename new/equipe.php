<?php 
    //session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";

    $active_equipe="active";
    $active_equipe_affiche="active";
	
    $rows = $login = $password1= $msg1 = $msg2 =  $placeholder = "";
    $x = 1;
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";

        //select des dates
    $sql = "SELECT * FROM equipe";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
?>

<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>

    <div class="container-fluid bg-white" style="margin-top:50px;max-width:2000px">
        <center><h4>Equipe</h4></center>
        <div class="row" style="margin-top:5%">
            <table class="table table-striped">
                <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identifiant de l'equipe</th>
                        <th scope="col">Nom de L'equipe</th>
                        <th scope="col">Rang de l'equipe</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                        <?php  
                        
                        foreach($rows as $row){ 
                        ?>
                    
                    <tr>
                        <td><?php echo $x; ?> </td>
                        <td><?php echo $row['id_equipe']; ?> </td>
                        <td><?php echo $row['nom_equipe']; ?> </td>
                        <td><?php echo $row['classement']; ?> </td>
                        <td><a href="supprimer.php?id=<?php echo $row['identifiant']; ?> " class="btn btn-outline-danger"> Supprimer </a> </td>
                    </tr>
                    
                        <?php 
                            $x = $x +1;
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
        <center><h4>Equipe</h4></center>
        <div class="row" style="margin-top:5%">
            <table class="table">
                <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identifiant de l'equipe</th>
                        <th scope="col">Nom de L'equipe</th>
                        <th scope="col">Rang de L'equipe</th>
                    </tr>
                </thead>
                <tbody>
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
