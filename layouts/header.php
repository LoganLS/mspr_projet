<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php include('layouts/head.php');?>
    </head>
    <body>
        <?php include_once('./components/debuger.php');?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav">
                    <div id="gauche">
                        <img id="image_gauche" src="images/logo.png" alt="logo du site">
                    </div>
                    <li><a class="nav-item nav-link" href="./index.php">RythmEvent</a></li>
                    <li><a class="nav-item nav-link" href="./events_list.php">Evénements</a></li>
                    <?php
                        if(!empty($_SESSION['role'])){
                            if($_SESSION['role']==='administrateur'){ ?>
                            <li><a class="nav-item nav-link" href="./validation_event.php">Espace administrateur</a></li>
                    <?php }
                        } ?>
                    <?php if(empty($_SESSION['id'])){ ?>
                        <li><a class="nav-item nav-link" href="./login.php">Connexion</a></li>
                        <li><a class="nav-item nav-link" href="./register.php">Inscription</a></li>
                    <?php }else{ ?>
                        <li><a class="nav-item nav-link" href="./profil.php?id=<?php echo $_SESSION['id'];?>">Profil</a></li>
                        <li><a class="nav-item nav-link" href="./logout.php">Déconnexion</a></li>
                    <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="#debuger" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="debuger">Debuger</a></li>
                </ul>
            </nav>
        </header>
