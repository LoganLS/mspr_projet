<?php
session_start();
unset($_SESSION['error']);
require("../php/db.php");

//Vérification que tous les champs du formulaire sont renseignés
if (!empty($_POST['event_name']) and !empty($_POST['date_start']) and !empty($_POST['hour_start']) and !empty($_POST['date_end']) and !empty($_POST['hour_end']) and !empty($_FILES['picture']) and !empty($_POST['description']) and !empty($_POST['limited_number_participants']) and !empty($_POST['zip_code']) and !empty($_POST['city']) and !empty($_POST['street'])){

    $event_name=$_POST["event_name"];
    $date_start=$_POST["date_start"];
    $hour_start=$_POST["hour_start"];
    $date_end=$_POST["date_end"];
    $hour_end=$_POST["hour_end"];
    $picture=$_FILES["picture"];
    $description=$_POST["description"];
    $limited_number_participants=$_POST["limited_number_participants"];
    $zip_code=$_POST["zip_code"];
    $city=$_POST["city"];
    $street=$_POST["street"];

    $sql="SELECT name FROM events WHERE name=:event_name";
    $stmt=$conn->prepare($sql);
    $stmt->bindValue(':event_name',$event_name);
    $stmt->execute();
    $event_exist=$stmt->fetch();
    if(!empty($event_exist)){
        $_SESSION['error']="Nom d'événement déjà existant !";
    }else{
        //Contrôle de la logique des dates et des heures renseignées
        if($date_start===$date_end){
            if($hour_start>=$hour_end){
                $_SESSION['error']="L'heure de fin doit être supérieur à la date de début, l'événement est sur la même journée !";
            }
        }

        if($date_start>$date_end){
            $_SESSION['error']="La date de fin doit survenir après le début de la date de l'événement ... !";
        }


        //Requête insertion d'un événement
        if(empty($_SESSION['error'])){
            $sql='INSERT INTO events(id_user,name,date_start,hour_start,date_end,hour_end,zip_code,name_city,street_address,description,limited_number_participant,date_created,picture,is_published)
            VALUES(:id_user,:name,:date_start,:hour_start,:date_end,:hour_end,:zip_code,:name_city,:street_address,:description,:limited_number_participant,NOW(),:picture,0)';
            $stmt=$conn->prepare($sql);
            $stmt->bindValue(':id_user',$_SESSION['id']);
            $stmt->bindValue(':name',$event_name);
            $stmt->bindValue(':date_start',$date_start);
            $stmt->bindValue(':hour_start',$hour_start);
            $stmt->bindValue(':date_end',$date_end);
            $stmt->bindValue(':hour_end',$hour_end);
            $stmt->bindValue(':zip_code',$zip_code);
            $stmt->bindValue(':name_city',$city);
            $stmt->bindValue(':street_address',$street);
            $stmt->bindValue(':description',$description);
            $stmt->bindValue(':limited_number_participant',$limited_number_participants);
            $stmt->bindValue(':picture',$event_name.' '.basename($picture['name']));
            $stmt->execute();

            //Enregistrement de l'image dans le dossier images
            move_uploaded_file($_FILES['picture']['tmp_name'],'../images/'.$event_name.' '.basename($_FILES['picture']['name']));
        }
    }
}else{
    $_SESSION['error']="Veuillez saisir tous les champs !";
}

if(empty($_SESSION['error'])){
    header('Location:../events_list.php');
}else{
    header('Location:../event_add.php');
}
?>
