<?php
    session_start();
    $title='Espace administratif';
    $description='';
?>
<?php
include_once('php/get_all_events_not_published.php');
include_once('layouts/header.php');?>
<main class="container">
    <h1>Espace administratif : Validation d'un événement</h1>
    <?php
    if(empty($events)){
        echo '<div>Aucun événément a valider actuellement.</div>';
    }else{
        echo '<ul class="list-group">';
            foreach($events as $event){ ?>
                <li class="list-group-item">
                    <a href="event_detail_admin.php?id=<?php echo $event->id;?>"><?php echo $event->name;?></a>
                </li>
            <?php }
        echo '</ul>';
    } ?>
</main>
<?php include_once('layouts/footer.php');?>
