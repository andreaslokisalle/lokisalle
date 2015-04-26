<h2>news letter</h2>
<?php 
/*if(isset($msg) & is_array($msg))
{
	foreach($msg as $msgs)
	{
		echo $msgs;

	}
}else{

}*/

if(isset($msg))
{
    echo $msg;
}


if(membre())
{




?>

</br>
<form method="post">
</br><input type="hidden" name="id_membre" value="<?php echo $_SESSION['membre']['id_membre'];?>"/></br>
 <?php echo $_SESSION['membre']['id_membre']?>
	<input type="radio" name="valide" value="">s'inscrire a la news letter 
	<input type="submit" name="validenewsletter" value="inscription news letter">
</form>
</br>
</br>
<?php 
}
else
{
?>

<p>vous devez vous inscrire pour avoir acces a la news letter<a href="index.php?page=membre&&action=creeuncompte"> inscription</a><p>
	<p>vous devez vous connectez pour avoir acces a la news letter<a href="index.php?page=membre&&action=connexion"> connexion</a><p>





<?php 
}
?>