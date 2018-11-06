<?php
    session_start();
    $title='Accueil';
    $description='';

    $sql= 'SELECT id, name, picture
    FROM events
    ORDER BY date_start
    LIMIT 5';

    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $evenements=$stmt->fechtAll();


    include_once('php/get_all_events_published.php');
?>
<?php include_once('layouts/header.php');?>
<main>

</main>
<?php include_once('layouts/footer.php');?>



<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/accueil.css">
  </head>
  <body>


    <h1>EVENEMENTS NANTES</h1>
    <h2>Spectacles, concerts, festivals et sorties</h2>
    <?php
foreach ($evenements as $evenement { ?>
<img src="images/<?php echo $evenement->picture ?>" alt="" id="<?php echo $evenement->name ?>" onclick="location.href='event_detail.php?id_event=<?php echo $evenement->id ?>'">

<?php }
 ?>



  </body>
</html>
