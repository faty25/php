<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title></title>
<style>
.rouge{color:red;}
</style>	
</head>
<body>
<?php
$id=$_GET['id'];
$username="root";
$password="";
$database="registration";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");
if(isset($_POST["supprimer"])){
$query="DELETE FROM users WHERE id = '$id'";
$resultat=mysql_query($query);
mysql_close();
echo 'La personne vient d\'être supprimé voulez vous retourner à : <a href="affiche.php">La liste de contacts</a>';
}else{
$query=" SELECT * FROM users WHERE id='$id'";
$resultat=mysql_query($query);
$num=mysql_num_rows($resultat) or die(mysql_error());
mysql_close();
$i=0;
while ($i < $num) {
$username=mysql_result($resultat,$i,"username");
$email=mysql_result($resultat,$i,"email");
$password=mysql_result($resultat,$i,"password");
?>
<b class="rouge">Voulez vous vraiment supprimer le personne:</b>
<form action="" method="post">
<input type="hidden" name="co_id" value="<?php echo $id; ?>">
username: <?php echo $username; ?><br>
email: <?php echo $email; ?><br>
password: <?php echo $password; ?><br>

<input name="supprimer" type="Submit" value="Oui supprimer définitivement">
</form> 
<?php
++$i;
}}
?>
</body>
</html>
