<?php
session_start();
$title='Espace administratif';
$description='';
if($_SESSION['role']!=='administrateur'){
    header('Location:index.php');
    exit();
}
include_once('php/event_detail_not_published.php');
include_once('layouts/header.php');?>
<main class="container" id="page_detail_event">
    <h1 class="text_center">Détail de l'événement "<?php echo $detail_evenement->name;?>"</h1>
    <h2 class="text_center">Organisé par <?php echo $createur_evenement->last_name.' '.$createur_evenement->first_name;?></h2>
    <img class="bloc_center" src="images/<?php echo $detail_evenement->picture;?>">
    <div id="bloc_detail_evenement">
        <div class="col-sm-12 card">
            <p class="card-body">Rendez-vous à <?php echo $detail_evenement->name_city.', '.$detail_evenement->zip_code.', '.$detail_evenement->street_address.' de '.date('d-m-Y',strtotime($detail_evenement->date_start)).' à '.$detail_evenement->hour_start.' jusqu\'au '.date('d-m-Y',strtotime($detail_evenement->date_end)).' '.$detail_evenement->hour_end;?></p>
            <p class="card-body"><?php echo $detail_evenement->description;?></p>
        </div>
    </div>
    <p>Nombre limité de participants : <?php echo $detail_evenement->limited_number_participant;?></p>
    <div id="espace_boutons_validation_events">
        <button class="btn btn-outline-dark" onclick="location.href='php/publier_evenement.php?id_event=<?php echo $_GET['id'];?>'">Valider l'événement</button>
        <button class="btn btn-outline-dark" onclick="location.href='php/supprimer_evenement.php?id_event=<?php echo $_GET['id'];?>'">Supprimer l'événement</button>
    </div>
</main>
<?php include_once('layouts/footer.php');?>
