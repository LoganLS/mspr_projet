<?php
//On démarre la session
    session_start();
    $title='Espace administratif';
    $description='';
?>
<?php
//On inclue les fichier
include_once('php/get_all_events_not_published.php');
include_once('layouts/header.php');?>
<main class="container">
    <h1>Espace administratif : Validation d'un événement</h1>
    <?php
    //si la table events est vide alors on affiche "Aucun événement a valider actuellement"
    if(empty($events)){
        echo '<div>Aucun événement a valider actuellement.</div>';
    //Sinon on affiche tous les événements
    }else{
        echo '<ul class="list-group">';
            foreach($events as $event){ ?>
                <li class="list-group-item">
    <!-- Redirection sur une page administrative avec détail complet de l'évènement où 'lon peut valider ou supprimer l'événement-->
                    <a href="event_detail_admin.php?id=<?php echo $event->id;?>"><?php echo $event->name;?></a>
                </li>
            <?php }
        echo '</ul>';
    } ?>
</main>
<!-- On inclue le footer -->
<?php include_once('layouts/footer.php');?>
