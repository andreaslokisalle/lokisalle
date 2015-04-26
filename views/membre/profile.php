<div>
<h2>Profile</h2>
</div>
</br>
</br>
<h3>Bonjour <strong><?php echo  $_SESSION['membre']['pseudo']?></strong></h3>
<h4>Vos Information</h4>
<p>Pseudo:&nbsp;<?php echo  $_SESSION['membre']['pseudo']?><br>
	Nom:&nbsp;<?php echo$_SESSION['membre']['nom']?><br>
	Prenom:&nbsp;<?php echo  $_SESSION['membre']['prenom']?><br>
	Email:&nbsp;<?php echo  $_SESSION['membre']['email']?><br>
	Adresse:&nbsp;<?php echo  $_SESSION['membre']['adresse']?><br>
	Code postal et ville:&nbsp;<?php echo  $_SESSION['membre']['cp']?>&nbsp;
	<?php echo  $_SESSION['membre']['ville']?></br>
</br>
<p class="lien_p_navigation"><a class="lien_a" href="index.php?page=membre&&action=modifierprofile&&id=<?php  echo $_SESSION['membre']['id_membre']?>">modifier son profile</a></p>
</br>
<?php var_dump($_SESSION);?>
</br>