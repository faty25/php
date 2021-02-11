<?php
$co_id=$_POST['co_id'];
$co_username=$_POST['co_username'];
$co_email=$_POST['co_email'];
$co_password=$_POST['co_password'];


$username="root";
$password="";
$database="registration";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");

$query="UPDATE users SET username='$co_username', email='$co_email', password='$co_password' WHERE id='$co_id'";
mysql_query($query);
echo "Les modification ont ete enregistrees dans la base de donnees";
mysql_close();;
?>
 