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
<main>
    <h1>EVENEMENTS NANTES</h1>
    <h2>Spectacles, concerts, festivals et sorties</h2>
    <?php
    foreach ($evenements as $evenement) { ?>
    <img src="images/<?php echo $evenement->picture; ?>" alt="" id="<?php echo $evenement->name; ?>" onclick="location.href='event_detail.php?id=<?php echo $evenement->id; ?>'">

    <?php } ?>
</main>
<?php include_once('layouts/footer.php');?>

