<?php
    session_start();
    $title='Accueil';
    $description='';

    include_once('php/db.php');
    $sql= 'SELECT id, name, picture
    FROM events
    WHERE is_published=1
    ORDER BY date_start
    LIMIT 5';

    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $evenements=$stmt->fetchAll();
?>
<?php include_once('layouts/header.php');?>
<main class="container">
    <h1 id="h1_accueil">EVENEMENTS NANTES</h1>
    <h2 id="h2_accueil">Spectacles, concerts, festivals et sorties</h2>
    <div id="bloc_parent_images_accueil">
        <?php
        foreach ($evenements as $evenement) { ?>
            <div class="bloc_images_accueil">
                <img src="images/<?php echo $evenement->picture; ?>" alt="" onclick="location.href='event_detail.php?id=<?php echo $evenement->id; ?>'">
                <p><?php echo $evenement->name;?></p>
            </div>
        <?php } ?>
    </div>
</main>
<?php include_once('layouts/footer.php');?>
