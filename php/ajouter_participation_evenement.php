<?php
session_start();
$id=$_GET['id_event'];
if(empty($_SESSION['id'])){
    header('Location:../event_detail.php?id='.$id);
    exit();
}
include_once('db.php');
$sql="INSERT INTO PARTICIPANTS VALUES(:id_event,:id_user)";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$_GET['id_event']);
$stmt->bindValue(':id_user',$_SESSION['id']);
$stmt->execute();
header('Location:../event_detail.php?id='.$id);