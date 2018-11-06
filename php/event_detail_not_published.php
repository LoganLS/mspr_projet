<?php
include_once('db.php');

//Récupération du détail de l'événement non publié
$sql="SELECT * FROM events 
        WHERE id=:id_event AND is_published=0";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$_GET['id']);
$stmt->execute();
$detail_evenement=$stmt->fetch();

//Récupération du créateur de l'événement
$sql="SELECT id,first_name,last_name FROM users
        WHERE id=:id_user";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_user',$detail_evenement->id_user);
$stmt->execute();
$createur_evenement=$stmt->fetch();