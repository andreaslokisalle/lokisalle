<h2>Contact</h2>

<?php 
if(membre())
{




?>

</br>
<form method="post"enctype=" multipart/form-data" >
</br><input type="hidden" name="email" value="<?php echo $_SESSION['membre']['email'];?>"/></br>
</br><input type="hidden" name="expediteur" value="webmaster@myspacebook.fr"/></br>
	</br><input type="text" name="sujet" placeholder="sujet"/></br>
	</br><textarea name="texte"></textarea></br>
	</br><input type="submit" name="envoye" value="envoyee"></br>
</form>
</br>
</br>
<?php 
}
else
{
?>

<form method="post" enctype="multipart/form-data" >
	
		</br><input type="email" name="email" placeholder="mail"/></br>
		</br><input type="hidden" name="expediteur" value="webmaster@myspacebook.fr"/></br>
	</br><input type="text" name="sujet" placeholder="sujet"/></br>
	</br><textarea name="texte"></textarea></br>
	</br><input type="submit" name="envoye" value="envoye"></br>
</form>






<?php 
}
?>