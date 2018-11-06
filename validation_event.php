<?php 
    session_start();
    $title='Espace administratif';
    $description='';
?>
<?php 
include_once('php/get_all_events_not_published.php');
include_once('layouts/header.php');?>
<main>
    <h1>Espace administratif : Validation d'un événement</h1>
    <?php
    if(empty($events)){
        echo '<div>Aucun événément à valider actuellement.</div>';
    }else{
        foreach($events as $event){ ?>
            <div>
                <a href="event_detail_admin.php?id=<?php echo $event->id;?>"><?php echo $event->name;?></a>
            </div>
        <?php } 
    } ?>
</main>
<?php include_once('layouts/footer.php');?>