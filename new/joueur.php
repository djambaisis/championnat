<?php 
    //session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
    $dbname = "championnat";

    $active_joueur="active";
    $active_joueur_affiche="active";
	
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
    $sql = "SELECT * FROM joueur";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
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
                        <th scope="col">#</th>
                        <th scope="col">Equipe une</th>
                </tr>
                </thead>
                <tbody>
                        <?php  
                        
                        foreach($rows as $row){ 
                        ?>
                    
                    <tr>
                        <td><?php echo $x; ?> </td>
                        <td><?php echo $row['id_joueur']; ?> </td>
                        
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
        <center><h4>Joueur</h4></center>
        <div class="row" style="margin-top:5%">
            <table class="table">
                <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">nbre but()</th>
                    </tr>
                </thead>
                <tbody>
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
