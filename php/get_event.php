<?php
//Récupération du détail de l'événement
$sql="SELECT * FROM events WHERE id=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$_GET['id']);
$stmt->execute();
$detail_evenement=$stmt->fetch();

//Récupération des commentaires
$sql="";

//Récupération des participants
?>