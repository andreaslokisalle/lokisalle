<h2>modification profile</h2>
<?php echo $verifmofif;?>
<?php echo $error;?>



<form method="post" action="">
	</br><input type="text" name="mdp"  placeholder="mdp"  value="<?php echo $_SESSION['membre']['mdp']?>"></br>
	</br><input type="email" name="email" i placeholder="email"  value="<?php echo $_SESSION['membre']['email']?>"></br>
	</br><input type="text" name="ville"  placeholder="ville" value="<?php echo $_SESSION['membre']['ville']?>"></br>
	</br><input type="text" name="cp" placeholder="cp"  value="<?php echo $_SESSION['membre']['cp']?>"></br>
	</br><input type="text" name="adresse"  placeholder="adresse"  value="<?php echo $_SESSION['membre']['adresse']?>"></br>
	</br><input type="submit" name="modifier"  value="modification" ></br>
</form>
</br>
</br>
