<?php
include_once('db.php');
$sql="SELECT id,name,date_start,date_end FROM events WHERE is_published=0";
$stmt=$conn->prepare($sql);
$stmt->execute();
$events=$stmt->fetchAll();
?>