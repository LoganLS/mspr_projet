<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location:../index.php');
    exit();
}
include_once('db.php');
$id_event=$_POST['bouton_event'];
$commentaire=$_POST['commentaire'];

$sql="INSERT INTO comments(id_event,id_user,body,date_created) VALUES(:id_event,:id_user,:body,NOW())";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$id_event);
$stmt->bindValue(':id_user',$_SESSION['id']);
$stmt->bindValue(':body',$commentaire);
$stmt->execute();
header('Location:../event_detail.php?id='.$id_event);
