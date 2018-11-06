<?php

include("php/db.php");
    session_start();
    $title='Espace profil';
    $description='';
    $_GET["id"];

    $sql="SELECT first_name, last_name, date_birthday, username, email, role, date_created
          FROM users
          WHERE id=:id";

    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);
    $stmt->execute();
    $member = $stmt->fetch();

?>
<?php include_once('layouts/header.php');?>
<main>
  <div class="container">


    <h1>Espace profil</h1>

  <table class="table table-bordered table-striped">
    <tbody>
    <tr>
      <td>Prénom - Nom</td>
      <td><?php echo $member->first_name." ".$member->last_name ?></td>
    </tr>
    <tr>
      <td>Date de naissance</td>
      <td><?php echo date("d-m-Y",strtotime($member->date_birthday)) ?></td>
    </tr>
    <tr>
      <td>Pseudo</td>
      <td><?php echo $member->username ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $member->email ?></td>
    </tr>
    <tr>
      <td>Rôle</td>
      <td><?php echo $member->role ?></td>
    </tr>
    <tr>
      <td>Date de création du compte</td>
      <td><?php echo date("d-m-Y H:i:s",strtotime($member->date_created)) ?></td>
    </tr>
  </tbody>
  </table>

<?php
$sql="SELECT name
      FROM events e
      INNER JOIN participants p
      ON e.id=p.id_event
      WHERE id_users=:id_users";

      $stmt=$conn->prepare($sql);
      $stmt->bindValue(":id_users", $_GET["id"]);
      $stmt->execute();
      $events = $stmt->fetchAll();
 ?>

<table class="table table-bordered table-striped">
<tbody>
    <tr>
  <td>Évènement où je participe</td>
</tr>
<?php foreach($events as $event){ ?>
<tr>
<td><?php echo $event->name; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
  </div>
</main>

<?php include_once('layouts/footer.php');?>
