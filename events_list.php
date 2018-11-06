<?php 
	session_start();
    $title='Liste événements';
    $description='';
?>
<?php include_once('layouts/header.php');?>
<main>
    <?php
    //Si l'utilisateur est connecté, il peut ajouter un événement.
    if(!empty($_SESSION['id'])){ ?>
        <button id="ajouter_evenement">Ajouter événement</button>
    <?php } ?>

    <div id='calendar-container'>
        <div id='calendar'></div>
    </div>
</main>
<?php include_once('layouts/footer.php');?>
