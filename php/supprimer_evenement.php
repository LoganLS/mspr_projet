<?php
session_start();
include_once('db.php');
$id_event=$_GET['id_event'];
//vérifier qu'il s'agit bien du créateur de l'event ou d'un admin
//Récupération du créateur de l'événement
$sql="SELECT u.id FROM users u INNER JOIN events e ON u.id=e.id_user
        WHERE e.id=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$id_event);
$stmt->execute();
$createur_evenement=$stmt->fetch();
if($createur_evenement->id===$_SESSION['id'] || $_SESSION['role']==="Administrateur"){
    //Suppression de tous les participants de l'événement
    $sql="DELETE FROM participants WHERE id_event=:id_event";
    $stmt=$conn->prepare($sql);
    $stmt->bindValue('id_event',$id_event);
    $stmt->execute();
    
    //Suppression de tous les commentaires liés à l'événement
    $sql="DELETE FROM comments WHERE id_event=:id_event";
    $stmt=$conn->prepare($sql);
    $stmt->bindValue('id_event',$id_event);
    $stmt->execute();
    
    //Suppression de l'événement
    $sql="DELETE FROM events WHERE id=:id_event";
    $stmt=$conn->prepare($sql);
    $stmt->bindValue('id_event',$id_event);
    $stmt->execute();
    header('Location:../events_list.php');
    exit();
}else{
    header('Location:../event_detail.php?id='.$id_event);
    exit();
}