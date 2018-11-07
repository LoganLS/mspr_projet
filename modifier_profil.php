<?php

include("php/db.php");
    session_start();
    $title='Espace profil';
    $description='';

    include_once('php/get_informations_user.php');

?>
<?php include_once('layouts/header.php');?>
<main>
  <div class="container">

<h1>Modification du profil</h1>

<form action="php/modifier_profil.php" method="post">

<div class="form-group">

<label for="last_name">Nom</label>
<input class="form-control" type="text" name="last_name" value="<?php echo $member->last_name; ?>">

</div>

<div class="form-group">

<label for="first_name">Prénom</label>
<input class="form-control "type="text" name="first_name" value="<?php echo $member->first_name; ?>">

</div>

<div class="form-group">

<label for="date_birthday">Date de naissance</label>
<input class="form-control "type="date" name="date_birthday" value="<?php echo date("Y-m-d",strtotime($member->date_birthday)); ?>">

</div>

<div class="form-group">

<label for="username">Pseudo</label>
<input class="form-control "type="text" name="username" value="<?php echo $member->username; ?>">

</div>

<div class="form-group">

<label for="email">email</label>
<input class="form-control "type="text" name="email" value="<?php echo $member->email; ?>">

</div>

<div class="form-group">

<label for="password">Mot de passe</label>
<input class="form-control "type="text" name="password">

</div>

<div class="form-group">

<label for="password_bis">Confirmation mot de passe</label>
<input class="form-control "type="text" name="password_bis">

</div>


</form>

  </div>
</main>

<?php include_once('layouts/footer.php');?>
