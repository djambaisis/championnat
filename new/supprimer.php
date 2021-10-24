<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "championnat";

$conn = mysqli_connect($servername,$username,$password,$dbname);

//supprimer un match
if(isset($_GET['id_jeux'])){
    $id_jeux = $_GET['id_jeux'];
    $del = "DELETE FROM jeux WHERE id_jeux=$id_jeux ";
    $result_del = mysqli_query($conn,$del);
    if($result_del){
        mysqli_close($conn);
        header("Location: match.php");
        exit;
    }
    else{
        echo "could not delete";
    }
}



//supprimer une equipe
if(isset($_GET['id_equipe'])){
    $id_equipe = $_GET['id_equipe'];
    $del = "DELETE FROM equipe WHERE id_equipe =$id_equipe ";
    $result_del = mysqli_query($conn,$del);
    if($result_del){
        mysqli_close($conn);
        header("Location:equipe.php");
        exit;
    }
    else{
        echo "could not delete";
    }
}


//supprimer un joueur
if(isset($_GET['id_joueur'])){
    $id_joueur = $_GET['id_joueur'];
    $del = "DELETE FROM joueur WHERE id_joueur=$id_joueur ";
    $result_del = mysqli_query($conn,$del);
    var_dump($result_del);
    if($result_del){
        mysqli_close($conn);
        header("Location: joueur.php");
        exit;
    }
    else{
        echo "could not delete:".mysqli_error($conn);
    }
}

?>