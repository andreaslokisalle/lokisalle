<h2>ajouter une salle</h2>
<?php 
if(isset($error))
{
	echo $error;
}elseif(isset($validation))
{
	echo $validation;
}

?>
</br>
<p class="lien_p_navigation"><a class="lien_a" href="index.php?page=admin&&action=modisupsalle">Supprime ou modifier</a></p>&nbsp;<p class="lien_p_navigation"><a class="lien_a" href="index.php?page=admin&&action=ajouterproduit">ajouter un produit</a></p>
</br>
<form method="post">
	<br/><input type="text" id="" class="" name="id_salle" placeholder="id_salle" value=""/><br/>
	<br/><input type="text" id="" class="" name="pays" placeholder="pays" value=""/><br/>
	<br/><input type="text" id="" class="" name="ville" placeholder="ville" value=""/><br/>
	<br/><input type="text" id="" class="" name="adresse" placeholder="adresse" value=""/><br/>
	<br/><input type="text" id="" class="" name="cp" placeholder="cp" value=""/><br/>
	<br/><input type="text" id="" class="" name="titre" placeholder="titre" value=""/><br/>
	<br/><textarea name="description" placeholder="description"></textarea><br/>
	<label for="photo"></label> 
	<br/><input type="file" id="photo" class="" name="photo" placeholder="" value=""/><br/>
	<br/><input type="text" id="" class="" name="capacite" placeholder="capacite" value=""/><br/>
	<br/><label>Categorie</label>
	<br/><input type="radio" id="" value="reunion" name="categorie"/>Reunion
	<br/><input type="radio" id="" value="conference" name="categorie"/>Conference
	<br/><input type="radio" id="" value="mariage" name="categorie"/>Mariage
	<br/><input type="text" id="" class="" name="reference" placeholder="refernce" value=""/><br/>
	<br/><br/><input type="submit" value="valide" name="valide"/><br/>
</form>
</br>
</br>