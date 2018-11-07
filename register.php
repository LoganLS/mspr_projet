<?php
	session_start();
    $title='Inscription';
    $description='';
?>
<?php include_once('layouts/header.php');?>
<main>

<div class="card contenu_page">

    <h1 class="h2">Inscription</h1>
	<form action="php/register.php" method="post">

        <div class="form-group">
            <label for="last_name">Nom</label>
            <input class="form-control" type="text" name="last_name" id="last_name">
        </div>

       <div class="form-group">
            <label for="first_name">Prénom</label>
            <input class="form-control" type="text" name="first_name" id="first_name">
        </div>

        <div class="form-group">
            <label for="date_birthday">Date de naissance</label>
            <input class="form-control" type="date" name="date_birthday" id="date_birthday">
        </div>

        <div class="form-group">
            <label for="username">Pseudo</label>
            <input class="form-control" type="text" name="username" id="username">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <label for="password_bis">Confirmation du mot de passe</label>
            <input class="form-control" type="password" name="password_bis" id="password_bis">
        </div>



        <div class="error">
            <?php if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <div>
            <button class="btn btn-outline-dark" type="submit">S'inscrire</button>
        </div>
</div>
	</form>
</main>
<?php include_once('layouts/footer.php');?>
