<?php
include_once('db.php');

//Récupération du détail de l'événement
$sql="SELECT * FROM events WHERE id=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$_GET['id']);
$stmt->execute();
$detail_evenement=$stmt->fetch();

//Récupération des commentaires
$sql="SELECT id,id_user,body,date_created FROM comments WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue('id_event',$_GET['id_event']);
$stmt->execute();
$liste_all_commentaires=$stmt->fetchAll();

//Récupération des participants
$sql="SELECT COUNT(*) as nb_participants FROM participants WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue('id_event',$_GET['id_event']);
$stmt->execute();
$nombre_participants=$stmt->fetch()[0];
?>