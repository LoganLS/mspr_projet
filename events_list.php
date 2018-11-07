<?php
	session_start();
    $title='Liste événements';
    $description='';

    include_once('php/get_all_events_published.php');
?>
<?php include_once('layouts/header.php');?>
<main class="container">
    <?php
    //Si l'utilisateur est connecté, il peut ajouter un événement.
    if(!empty($_SESSION['id'])){ ?>
        <button id="ajouter_evenement" class="btn btn-outline-dark">Ajouter un évènement</button>
    <?php } ?>

    <div id='calendar-container'>
        <div id='calendar'></div>
    </div>
</main>
<?php include_once('layouts/footer.php');?>
