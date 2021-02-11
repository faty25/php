<?php
mysql_connect("localhost","root","");
mysql_select_db("registration") or die("erreur");

$req = mysql_query("SELECT * FROM users");
$res = mysql_query($req);
?>

<table border='1'>
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Email</td>
        <td>Password</td>
        <td>Action</td>
</tr>
<?php
while($res = mysql_fetch_array($req)){
    ?>
    <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['username'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['password'];?></td>
        
   <td>

        <form method="POST" enctype="multipart/form-data">
        <br>
        <button name="delete" type="submit"><a href="supprimer.php?id=<?php echo $res['id']; ?>">Supprimer</a></button>
        <!--<button name="delete" type ="submit" value="<?php //echo $res['id'];?>">Supprimer</button>--> 
        <!--<button name="show" type ="submit" value="<?php //echo $res['id'];?>" >Modifier</button></td>-->
        <button name="update" type="submit"><a href="update.php?id=<?php echo $res['id']; ?>">modifier</a></button></td>
        </form>
</tr>
<?php
}
?>
</table>