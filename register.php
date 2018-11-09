<?php
//On démarre la session
	session_start();
    $title='Inscription';
    $description='';
?>
<!-- On inclue le header -->
<?php include_once('layouts/header.php');?>
<main>


<div class="card contenu_page">

    <h1 class="h2">Inscription</h1>
<!-- Formulaire d'inscription -->
<!-- On redirige vers la page "register.php"-->
	<form action="php/register.php" method="post">

<!-- "form-group" -> Boostrap -->
        <div class="form-group">
<!--required = remplir le champs si il est vide -->
            <label for="last_name">Nom</label>
            <input class="form-control" type="text" name="last_name" id="last_name" required>
        </div>

       <div class="form-group">
            <label for="first_name">Prénom</label>
            <input class="form-control" type="text" name="first_name" id="first_name" required>
        </div>

        <div class="form-group">
            <label for="date_birthday">Date de naissance</label>
            <input class="form-control" type="date" name="date_birthday" id="date_birthday" required>
        </div>

        <div class="form-group">
            <label for="username">Pseudo</label>
            <input class="form-control" type="text" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="password_bis">Confirmation du mot de passe</label>
            <input class="form-control" type="password" name="password_bis" id="password_bis" required>
        </div>

<!--Si $_SESSION["error"] contient une erreur alors on l'affiche puis on la détruit --> 
        <div class="error">
            <?php if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </div>
<!--Bouton s'inscrire + "btn btn-outline_dark" bootstrap -->
        <div>
            <button class="btn btn-outline-dark" type="submit">S'inscrire</button>
        </div>
</div>
	</form>
</main>
<?php include_once('layouts/footer.php');?>
