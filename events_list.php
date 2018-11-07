<?php
	session_start();
    $title='Liste événements';
    $description='';

  include_once('php/db.php');
	$sql= "SELECT id, name
	       FROM events
				 WHERE is_published=1
				 AND date_start>=NOW()
				 ORDER BY date_start
				 LIMIT 10";

	 $stmt=$conn->prepare($sql);
	 $stmt->execute();
	 $events=$stmt->fetchAll();

?>
<?php include_once('layouts/header.php');?>
<main class="container">


<div class="block">
		<ul class="list-group block1">
			  <li class="list-group-item active">Prochains événements</li>
			<?php foreach($events as $event) { ?>
                <li class="list-group-item"><a href="event_detail.php?id=<?php echo $event->id;?>"><?php echo $event->name;?></a></li>
			<?php } ?>
			<br>
			<?php
	    //Si l'utilisateur est connecté, il peut ajouter un événement.
	    if(!empty($_SESSION['id'])){ ?>
	        <button id="ajouter_evenement" class="btn btn-outline-dark">Ajouter un événement</button>
	    <?php } ?>
		</ul>

	<?php include_once('php/get_all_events_published.php'); ?>

    <div id='calendar-container'>
        <div class="block2" id='calendar'></div>
    </div>
</div>
</main>
<?php include_once('layouts/footer.php');?>
