<?php

include("php/db.php");
    session_start();
    $title='Espace profil';
    $description='';

    include_once('php/get_informations_user.php');

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

<?php include_once('php/get_events_participate.php') ?>
      

<table class="table table-bordered table-striped">

<tbody>
    <tr>
  <td>Évènement où je participe</td>
</tr>

<?php foreach($events as $event){ ?>
<tr>
    <td><a href="event_detail.php?id=<?php echo $event->id;?>"><?php echo $event->name; ?></a></td>
</tr>
<?php } ?>
</tbody>
</table>
  </div>
</main>

<?php include_once('layouts/footer.php');?>
