<?php
    session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "championnat";
	
    $login = $password1= $msg = $placeholder = "";
	$error= "";
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
	//echo "Connected successfully". "<br>";
    
    

    if(isset($_POST["connecter"])){

        $login = $_POST["login"];
        $password1 = $_POST["password1"];
        $placeholder = $_POST["login"];


        //select du text
        $sql = "SELECT * FROM authentification WHERE login='$login' AND psw='$password1'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        

        if(mysqli_num_rows($result)>0){
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $row['id'];
            header("Location: header.php");
        }else{
            $error = "alert alert-danger role=alert ";
            $msg = "connection echoue";
        }

    }
    
    
	
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Connection</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<body class="jumbotron">
    <div class="container bg-white" style="max-width:410px;margin-top:80px;height:320px">
        <center>
            <h3>Authentification</h3>
        </center>
        <form action="index.php" method="POST">
            <div>
                <label><h6>Login</h6></label>
                <input type="text" value="<?php echo $placeholder?>" class="form-control" name="login" placeholder="Entrez votre nom"/>
            </div>
            <div  style="margin-top:3%">
                <label><h6>Password</h6></label>
                <input type="password" placeholder="Entrez votre motdepasse" class="form-control" name="password1"/>
            </div>
            <center style="margin-top:5%">
                <input type="submit" value="Connecter" class="btn btn-primary" name="connecter"/>
            </center>
            <div  class="<?php echo $error; ?>" style="margin-top:2%" >
                <?php echo $msg; ?>
            </div>
        </form>
    </div>
        <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    </div>
</body>
</html>