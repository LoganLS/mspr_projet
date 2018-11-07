<?php

$sql="SELECT first_name, last_name, date_birthday, username, email,role, date_created
          FROM users
          WHERE id=:id";

    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);
    $stmt->execute();
    $member = $stmt->fetch();

?>