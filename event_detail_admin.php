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
<main class="container">
    <h1>Détail de l'événement "<?php echo $detail_evenement->name;?>"</h1>
    <h2>Organisé par <?php echo $createur_evenement->last_name.' '.$createur_evenement->first_name;?></h2>
    <div id="bloc_detail_evenement">        
        <div>
            <p>Rendez-vous à <?php echo $detail_evenement->name_city.', '.$detail_evenement->zip_code.', '.$detail_evenement->street_address.' de '.date('d-m-Y',strtotime($detail_evenement->date_start)).' à '.$detail_evenement->hour_start.' jusqu\'au '.date('d-m-Y',strtotime($detail_evenement->date_end)).' '.$detail_evenement->hour_end;?></p>
            <p><?php echo $detail_evenement->description;?></p>
        </div>
    </div>
    <p>Nombre limitants de participants : <?php echo $detail_evenement->limited_number_participant;?></p>
    <button onclick="location.href='php/publier_evenement.php?id_event=<?php echo $_GET['id'];?>'">Valider l'événement</button>
    <button onclick="location.href='php/supprimer_evenement.php?id_event=<?php echo $_GET['id'];?>'">Supprimer l'événement</button>
</main>
<?php include_once('layouts/footer.php');?>