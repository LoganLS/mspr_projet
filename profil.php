<?php
//On inclue le dossier db.php
include("php/db.php");

//On démarre la session
    session_start();
    $title='Espace profil';
    $description='';
?>
<!--On inclue le header -->
<?php include_once('layouts/header.php');?>
<main>
  <div class="container">


    <h1 class="h2">Espace profil</h1>
    <?php

      include_once('php/verification_user_existant.php');

//Si la valeur dans la variable $utilisateurExiste est égale à 1 alors c'est bon
      if($utilisateurExiste===1){
        include_once('php/get_informations_user.php');?>

<!--Afficher les informations de la table member -->
        <p id="nom_prenom_profil"><?php echo $member->first_name." ".$member->last_name ?></p>

<!-- Bootstrap création de bordure et "stripe" -->
      <table class="table table-bordered table-striped table_page_profil">
        <tbody>
        <tr>
          <td class="text_titre_info_profil">Date de naissance</td>
          <td><?php echo date("d-m-Y",strtotime($member->date_birthday)) ?></td>
        </tr>
        <tr>
          <td class="text_titre_info_profil">Pseudo</td>
          <td><?php echo $member->username ?></td>
        </tr>
        <tr>
          <td class="text_titre_info_profil">Email</td>
          <td><?php echo $member->email ?></td>
        </tr>
        <tr>
          <td class="text_titre_info_profil">Rôle</td>
          <td><?php echo $member->role ?></td>
        </tr>
        <tr>
          <td class="text_titre_info_profil">Date de création du compte</td>
          <td><?php echo date("d-m-Y H:i:s",strtotime($member->date_created)) ?></td>
        </tr>
      </tbody>
      </table>

    <?php include_once('php/get_events_participate.php') ?>

    <table class="table table-bordered table-striped table_page_profil">

    <tbody>
        <tr>
      <td class="text_titre_events_profil">Événement où je participe</td>
    </tr>

<!-- foreach -> parcourir toute la table évènement pour afficher de le détails des évènements
    <?php foreach($events as $event){ ?>
    <tr>
        <td><a href="event_detail.php?id=<?php echo $event->id;?>"><?php echo $event->name; ?></a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>

    <?php include_once('php/get_events_created.php') ?>


    <table class="table table-bordered table-striped table_page_profil">

    <tbody>
        <tr>
      <td class="text_titre_events_profil">Événement créés</td>
    </tr>

    <?php foreach($events as $event){ ?>
    <tr>
        <td><a href="event_detail.php?id=<?php echo $event->id;?>"><?php echo $event->name; ?></a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>

    <?php
    if(!empty($_SESSION['id'])){
      if($_SESSION['id'] == $_GET['id']){


     ?>
    <button class="btn btn-outline-dark" onclick="location.href='modifier_profil.php?id=<?php echo $_SESSION['id']; ?>'" type="button">Modifier mon profil</button>

    <?php  }
    }
}else{ ?>
      <div>Aucun profil ne correspond !</div>
<?php } ?>



  </div>
</main>

<?php include_once('layouts/footer.php');?>
