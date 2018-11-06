<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('layouts/head.php');?>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>Nom du site</li>
                    <li><a href="./index.php">Accueil</a></li>
                    <li><a href="./events_list">Évenements</a></li>
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