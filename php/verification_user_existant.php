<?php

include_once('db.php');
$sql="SELECT * FROM users WHERE id=:id_user";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id_user',$_GET['id']);
$stmt->execute();
$utilisateurExiste=$stmt->rowCount();
?>