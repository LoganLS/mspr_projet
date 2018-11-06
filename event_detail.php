<?php 
    session_start();
    $title='Détail événement';
    $description='';
?>
<?php 
include_once('php/get_event.php');
include_once('layouts/header.php');?>
<main>
    <h1>Détail événement</h1>
    <?php
    
    /*
        Si adminsitrateur ou créateur de l'event : bouton supprimer. (!empty $_session)
        Extension possible : Bouton modifier + popup confirmation
        
        Lister les participants
        
        Espace commentaires (si inscrit peut écrire, sinon lui indiquer qu'il doit se connecter, afficher les commentaires).
        Extension possible : suppression de son commentaire.
    */
    
    ?>
</main>
<?php include_once('layouts/footer.php');?>