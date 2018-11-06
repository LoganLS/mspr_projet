<?php
include_once('db.php');

//Récupération du détail de l'événement
$sql="SELECT * FROM events 
        WHERE id=:id_event";
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

//Récupération des commentaires
$sql="SELECT id,id_user,body,date_created FROM comments 
        WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue('id_event',$_GET['id']);
$stmt->execute();
$liste_all_commentaires=$stmt->fetchAll();

//Récupération du nombre de participants
$sql="SELECT COUNT(*) as nb_participants FROM participants 
        WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue('id_event',$_GET['id']);
$stmt->execute();
$nombre_participants=$stmt->fetch();
$nombre_participants=$nombre_participants->nb_participants;

//Récupération des participants
$sql="SELECT id,first_name,last_name FROM participants p
        INNER JOIN users u ON p.id_users=u.id
        WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue('id_event',$_GET['id']);
$stmt->execute();
$participants=$stmt->fetchAll();

//Savoir si le membre est un participant
if(!empty($_SESSION['id'])){
    $sql="SELECT id_users FROM participants WHERE id_users=:id_user AND id_event=:id_event";
    $stmt=$conn->prepare($sql);
    $stmt->bindValue(':id_user',$_SESSION['id']);
    $stmt->bindValue(':id_event',$_GET['id']);
    $stmt->execute();
    $est_participant=$stmt->rowCount();
}

$sql="SELECT first_name,last_name,body,c.date_created FROM users u INNER JOIN comments c
        WHERE id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$_GET['id']);
$stmt->execute();
$commentaires=$stmt->fetchAll();
?>