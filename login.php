<?php
    session_start();
    $title='Connexion';
    $description='';
?>
<?php include_once('layouts/header.php');?>
<main>

<div class="card contenu_page">

    <h1 h4. Bootstrap heading>Connexion</h1>
	<form action="php/login.php" method="post">

	     <div class="form-group">
           <label for="email">Adresse mail</label>
           <input class="form-control" type="mail" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="error">
            <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <div>
			<button class="btn btn-outline-dark" type="submit">Se connecter</button>
        </div>
	</form>
  </div>
</main>
<?php include_once('layouts/footer.php');?>
