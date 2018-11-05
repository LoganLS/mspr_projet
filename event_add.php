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
    <h1>Ajouter un événement</h1>
	<form action="php/event_add.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="event_name">Nom événement</label>
            <input type="text" name="event_name" id="event_name">
        </div>
        <div>
            <label for="date_start">Date début</label>
            <input type="date" name="date_start" id="date_start">
        </div>
        <div>
            <label for="hour_start">Heure début</label>
            <input type="time" name="hour_start" id="hour_start">
        </div>
        <div>
            <label for="date_end">Date fin</label>
            <input type="date" name="date_end" id="date_end">
        </div>
        <div>
            <label for="hour_end">Heure fin</label>
            <input type="time" name="hour_end" id="hour_end">
        </div>
        <div>
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" accept=".jpg, .jpeg, .png">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="limited_number_participants">Nombre limite participants</label>
            <input type="number" name="limited_number_participants" id="limited_number_participants">
        </div>
        <h2>Adresse</h2>
        <div>
            <label for="zip_code">Code postal</label>
            <input type="text" name="zip_code" id="zip_code">
        </div>
        <div>
            <label for="city">Ville</label>
            <input type="text" name="city" id="city">
        </div>
        <div>
            <label for="street">Rue</label>
            <input type="text" name="street" id="street">
        </div>
        <div class="error">
            <?php if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } 
            ?>
        </div>
        <div>
            <button type="submit">Créer événement</button>
        </div>
	</form>
</main>
<?php include_once('layouts/footer.php');?>