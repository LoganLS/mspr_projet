<?php
session_start();
$id=$_GET['id_event'];
if(empty($_SESSION['id'])){
    header('Location:../event_detail.php?id='.$id);
    exit();
}
include_once('db.php');
$sql="DELETE FROM participants WHERE id_users=:id_user AND id_event=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_user',$_SESSION['id']);
$stmt->bindValue(':id_event',$_GET['id_event']);
$stmt->execute();
header('Location:../event_detail.php?id='.$id);