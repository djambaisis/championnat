<!DOCTYPE html>
<html>
<head>
    <title>Client</title>
    <meta charset="utf-8" name="viewport"  content="width=device-width,initial=scale=1">
    <script src="bootstrap-4.4.1-dist/js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="semantic/dist/semantic.min.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

   
    <style>
        .msg{
            text-align: center;
            color:white;
            height: 20%;
            border-radius: 3px;
            margin-top:9px;
        }
        .client{
            background-image: url("m1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .topnav{
            background-color:#333;
            overflow:hidden;
        }

        .topnav a{
            float:center;
            color:white;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
            font-size:17px;
        }

        .topnav a:hover{
            background-color:green;
            color:white;
        }

        .topnav a.active{
            background-color:#4CAF50;
            color:white;
        }

        .cote{
            padding-left:500px;
        }
    </style>
</head>
<body class="jumbotron client">

<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark bg-dark">
<div class="navbar-hearder ">
        <a href="new/index.php"><img class="logo" src="7.png"></a>       
</div>
        <p class="topnav a"><h1 class="cote">CHAMPIONNAT</h1></p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</nav><br><br>
<?php include("match.php"); ?>
    <div class="topnav">
        
        <a href="direct.php">match en cours</a>
        <a href="match.php">programme</a>
        <a href="buteur.php">buteur</a>
        <a href="classement.php">classement</a>
        <a href="stat.php">stats</a>
        <strong class="cote">
        <i class="add to calendar icon"></i>
        <i class="alarm outline icon"></i>
        <i class="alarm mute outline icon"></i>
        <i class="alarm mute icon"></i>
        <i class="alarm icon"></i> <i class="at icon"></i>
        <i class="browser icon"></i> <i class="bug icon"></i>
        <i class="calendar outline icon"></i>
        <i class="calendar icon"></i>
        <i class="checked calendar icon"></i>
        <i class="cloud icon"></i>
        </strong>    
    </div>

     <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>-->
     <script src="semantic/dist/semantic.min.js"></script>
    </body>
</html>
