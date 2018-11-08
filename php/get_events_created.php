<?php
$sql="SELECT id, name
      FROM events e
      WHERE id_user=:id_user";

      $stmt=$conn->prepare($sql);
      $stmt->bindValue(":id_user", $_GET["id"]);
      $stmt->execute();
      $events = $stmt->fetchAll();
 ?>
