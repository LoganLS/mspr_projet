<?php

include("php/db.php");
    session_start();
    $title='Espace profil';
    $description='';

/* on inclue la base de donnée */
    include_once('php/get_informations_user.php');

?>
<?php include_once('layouts/header.php');?>
<main>
  <div class="container">

<h1>Modification du profil</h1>

<!-- action c'est pour rediriger vers une page   -->
<form action="php/modifier_profil.php" method="post">

<!-- form group bootsrap-->
<div class="form-group">

<label for="last_name">Nom</label>                   <!-- on affiche le nom de famille présent dans la table member-->
<input class="form-control" type="text" name="last_name" value="<?php echo $member->last_name; ?>" required>

</div>

<div class="form-group">

<label for="first_name">Prénom</label>              <!-- on affiche le prénom présent dans la table member-->
<input class="form-control "type="text" name="first_name" value="<?php echo $member->first_name; ?>" required>

</div>

<div class="form-group">

<label for="date_birthday">Date de naissance</label>      <!-- on affiche la date présent dans la table member-->
<input class="form-control "type="date" name="date_birthday" value="<?php echo date("Y-m-d",strtotime($member->date_birthday)); ?>" required>

</div>

<div class="form-group">

<label for="username">Pseudo</label>               <!-- on affiche le pseudo présent dans la table member-->
<input class="form-control "type="text" name="username" value="<?php echo $member->username; ?>" required>

</div>

<div class="form-group">

<label for="email">email</label>             <!-- on affiche l'email présent dans la table member-->
<input class="form-control "type="text" name="email" value="<?php echo $member->email; ?>" required>

</div>

<div class="form-group">

<label for="password">Mot de passe</label>
<input class="form-control "type="password" name="password" required>

</div>

<div class="form-group">

<label for="password_bis">Confirmation mot de passe</label>
<input class="form-control "type="password" name="password_bis" required>

</div>

<button class="btn btn-outline-dark" type="submit" name="button">Modifier</button>
</form>

  </div>
</main>

<?php include_once('layouts/footer.php');?>
