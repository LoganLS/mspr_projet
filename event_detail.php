<?php 
    session_start();
    $title='Détail événement';
    $description='';
?>
<?php 
include_once('php/get_event.php');
include_once('layouts/header.php');?>
<main>
    <h1>Détail de l'événement "<?php echo $detail_evenement->name;?>"</h1>
    <h2>Organisé par <?php echo $createur_evenement->last_name.' '.$createur_evenement->first_name;?></h2>
    <div id="bloc_detail_evenement">
        <?php 
        if(!empty($_SESSION['id'])){
            //S'il n'est pas un participant, il a accès au bouton participer, sinon il peut annuler sa participation
            if($est_participant===0){ ?>
                <button onclick="location.href='php/ajouter_participation_evenement.php?id_event=<?php echo $_GET['id'];?>'">Participer</button>
            <?php }else{ ?>
                <button onclick="location.href='php/annuler_participation_evenement.php?id_event=<?php echo $_GET['id'];?>'">Annuler participation</button>
            <?php }
        }else{
            echo '<div>Vous devez être connectés pour pouvoir participer à l\'événement !</div>';
        } ?>
        
        <div>
            <p>Rendez-vous à <?php echo $detail_evenement->name_city.', '.$detail_evenement->zip_code.', '.$detail_evenement->street_address.' de '.date('d-m-Y',strtotime($detail_evenement->date_start)).' à '.$detail_evenement->hour_start.' jusqu\'au '.date('d-m-Y',strtotime($detail_evenement->date_end)).' '.$detail_evenement->hour_end;?></p>
            <p><?php echo $detail_evenement->description;?></p>
        </div>
        
        <?php if($createur_evenement->id===$_SESSION['id'] || $_SESSION['role']==="Administrateur"){ ?>
            <button onclick="location.href='php/supprimer_evenement.php?id_event=<?php echo $_GET['id'];?>'">Supprimer</button>
        <?php } ?>
    </div>
    <p>Nombre limitants de participants : <?php echo $detail_evenement->limited_number_participant;?></p>
    <?php if(empty($participants)){
        echo '<div>Aucun participant actuellement.</div>';
    }else{ ?>
        <table>
            <thead>
                <tr>
                    <td>Liste participants</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($participants as $participant){ ?>
                    <tr>
                        <td><?php echo $participant->last_name;?></td>
                        <td><?php echo $participant->first_name;?></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <h2>Espace commentaires</h2>
    <?php 
    if(!empty($_SESSION['id'])){ ?>
        <form method="post">
            <textarea placeholder="Votre commentaire ..."></textarea>
        </form>
    <?php } 
    //Liste de tous les commentaires existants pour cet événement
    foreach($commentaires as $commentaire){ ?>
        <div>
            <p>Posté par <?php echo $commentaire->first_name.' '.$commentaire->last_name; ?></p>
            <p>Le : <?php echo $commentaire->date_created;?></p>
            <p><?php echo $commentaire->body;?></p>
        </div>
    <?php } ?>
    
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