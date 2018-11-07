<?php
	session_start();
    $title='Ajouter un événement';
    $description='';

    //Si l'utilisateur n'est pas connecté, on le redirige sur la page de la liste de tous les événements.
    if(empty($_SESSION['id'])){
        header('Location:events_list.php');
    }
?>
<?php include_once('layouts/header.php');?>
<main>
	<div class="card contenu_page">
    <h1 class="h2">Ajouter un évènement</h1>
    <strong>Votre événement sera validé par un administrateur avant d'être diffusé sur notre site.</strong>
	<form action="php/event_add.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="event_name">Nom de l'évènement</label>
            <input class="form-control" type="text" name="event_name" id="event_name">
        </div>
        <div class="form-group">
            <label for="date_start">Date de début</label>
            <input class="form-control" type="date" name="date_start" id="date_start">
        </div>
        <div class="form-group">
            <label for="hour_start">Heure de début</label>
            <input class="form-control" type="time" name="hour_start" id="hour_start">
        </div>
        <div class="form-group">
            <label for="date_end">Date de fin</label>
            <input class="form-control" type="date" name="date_end" id="date_end">
        </div>
        <div class="form-group">
            <label for="hour_end">Heure de fin</label>
            <input class="form-control" type="time" name="hour_end" id="hour_end">
        </div>
        <div class="form-group">
            <label for="picture">Photo</label>
            <input class="form-control" type="file" name="picture" id="picture" accept=".jpg, .jpeg, .png">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="limited_number_participants">Nombre limite de participants</label>
            <input class="form-control" type="number" name="limited_number_participants" id="limited_number_participants">
        </div>

        <h2 class="h2">Adresse de l'évènement</h2>

				<div class="form-group">
						<label for="city">Ville</label>
						<input class="form-control" type="text" name="city" id="city">
				</div>
        <div class="form-group">
            <label for="zip_code">Code postal</label>
            <input class="form-control" type="text" name="zip_code" id="zip_code">
        </div>

        <div class="form-group">
            <label for="street">Rue</label>
            <input class="form-control" type="text" name="street" id="street">
        </div>
        <div class="error">
            <?php if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <div>
            <button class="btn btn-outline-dark" type="submit">Créer l'évènement</button>
        </div>
			</div>
	</form>
</main>
<?php include_once('layouts/footer.php');?>
