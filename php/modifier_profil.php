<?php
session_start();
include_once('db.php');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$date_birthday=$_POST['date_birthday'];
$password=md5($_POST['password']);
$id=$_SESSION['id'];


$sql='UPDATE users SET first_name=:first_name,last_name=:last_name,date_birthday=:date_birthday,
username=:username,email=:email,password=:password
WHERE id=:id';

/*on prepare la requête sql*/
 $stmt=$conn->prepare($sql);

 /* */
 $stmt->bindValue("first_name",$first_name);
 $stmt->bindValue("last_name",$last_name);
 $stmt->bindValue("email",$email);
 $stmt->bindValue("username",$username);
 $stmt->bindValue("date_birthday",$date_birthday);
 $stmt->bindValue("password",$password);
 $stmt->bindValue("id",$id);

 /*on execute la requête */
 $stmt->execute();
header('Location:../profil.php?id='.$id);
 ?>
