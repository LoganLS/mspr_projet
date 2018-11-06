<?php
include_once('db.php');

$id_event=$_GET['id_event'];
$sql="UPDATE events
        SET is_published=1 WHERE id=:id_event";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_event',$id_event);
$stmt->execute();
header('Location:../validation_event.php');