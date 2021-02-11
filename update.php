<?php
$id=$_GET['id'];
$username="root";
$password="";
$database="registration";
mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Désolé la base de données ne peut pas être sélectionnée");
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

Le Code ici

<?php
++$i;
}
?>
<form action="mise-a-jour.php" method="post">
<input type="hidden" name="co_id" value="<?php echo $id; ?>">
username: <input type="text" name="co_username" value="<?php echo $username; ?>"><br>
email: <input type="text" name="co_email" value="<?php echo $email; ?>"><br>
password: <input type="password" name="co_password" value="<?php echo $password; ?>"><br>

<input type="Submit" value="Update">
</form>