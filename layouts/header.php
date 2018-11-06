<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php include('layouts/head.php');?>
    </head>
    <body>
        <header>

          <div class="img_header">
            <img id="gauche" src="logo.png" alt="logo du site">
            <img id="droite" src="elementsgraphique.png" alt="elements graphique">
          </div>

            <nav>
                <ul>
                    <li>RythmEvent</li>
                    <li><a href="./index.php">Accueil</a></li>
                    <li><a href="./events_list.php">Évenements</a></li>
                    <?php 
                        if(!empty($_SESSION['role'])){
                            if($_SESSION['role']==='administrateur'){ ?>
                            <li><a href="./validation_event.php">Espace administrateur</a></li>
                    <?php }
                        } ?>
                    <?php if(empty($_SESSION['id'])){ ?>
                        <li><a href="./login.php">Connexion</a></li>
                        <li><a href="./register.php">Inscription</a></li>
                    <?php }else{ ?>
                        <li><a href="./profil.php?id=<?php echo $_SESSION['id'];?>">Profil</a></li>
                        <li><a href="./logout.php">Déconnexion</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
