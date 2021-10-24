<?php
    session_start();
    $login = $_SESSION['login'];
?>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="bootstrap-4.4.1-dist/js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

    <style>
        .msg{
            text-align: center;
            color:white;
            height: 20%;
            border-radius: 3px;
            margin-top:9px;
        }
        .admin{
            background-image: url("m2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="jumbotron admin">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark bg-dark">
        <a href="admin.php" class="navbar-brand mb-0 h1 text-white">Championnat:</a>
        <span class="navbar-brand mb-0 ">Hello Mr <?php echo $login; ?> </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $active_equipe;?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Equipe
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo $active_equipe_aj;?>" href="ajout_equipe.php">Ajouter une equipe</a>
                            <a class="dropdown-item <?php echo $active_equipe_affiche;?>" href="equipe.php">Afficher les equipe</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $active_match;?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Match
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo $active_match_af;?>" href="ajout_match.php">Ajouter un match</a>
                            <a class="dropdown-item <?php echo $active_match_affiche;?>" href="match.php">Afficher les match</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $active_joueur;?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Information courante
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo $active_joueur_af;?>" href="ajout_joueur.php">Ajouter</a>
                            <a class="dropdown-item <?php echo $active_joueur_affiche;?>" href="joueur.php">Afficher</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../interface1.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
