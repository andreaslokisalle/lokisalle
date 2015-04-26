<h2>modifier une salle</h2>
<br/>
<br/>

<?php 
if(isset($_GET['id']))
{
	if(isset($modifsalle) & is_array($modifsalle))
	{
		/*var_dump($modifsalle);*/
		foreach($modifsalle as $modifsalles)
		{
?>
			<form method="post">
		<br/><input type="text" id="" class="" name="id_salle" placeholder="id_salle" value="<?php  echo $modifsalles['id_salle'];?>"/><br/>
		<br/><input type="text" id="" class="" name="pays" placeholder="pays" value="<?php  echo $modifsalles['pays'];?>"/><br/>
		<br/><input type="text" id="" class="" name="ville" placeholder="ville" value="<?php  echo $modifsalles['ville'];?>"/><br/>
		<br/><input type="text" id="" class="" name="adresse" placeholder="adresse" value="<?php  echo $modifsalles['adresse'];?>"/><br/>
		<br/><input type="text" id="" class="" name="cp" placeholder="cp" value="<?php  echo $modifsalles['cp'];?>"/><br/>
		<br/><input type="text" id="" class="" name="titre" placeholder="titre" value="<?php  echo $modifsalles['titre'];?>"/><br/>
		<br/><textarea name="description" placeholder="description"><?php  echo $modifsalles['description'];?></textarea><br/>
		<label for="photo"></label> 
		<br/><input type="file" id="photo" class="" name="photo" placeholder="" value=""/><br/>
		<br/><input type="text" id="" class="" name="capacite" placeholder="capacite" value="<?php  echo $modifsalles['capacite'];?>"/><br/>
		<br/><label>Categorie</label>
		<br/><input type="radio" id="" value="<?php  echo $modifsalles['reunion'];?>" name="categorie" <?php //if((isset($modifsalles['categorie']) && $modifsalles['categorie'] == 'reunion')) echo 'checked';  ?>/>Reunion
		<br/><input type="radio" id="" value="<?php  echo $modifsalles['conference'];?>" name="categorie" <?php //if((isset($modifsalles['categorie']) && $modifsalles['categorie'] == 'conference')) echo 'checked';   ?>/>Conference
		<br/><input type="radio" id="" value="<?php  echo $modifsalles['mariage'];?>" name="categorie" <?php //if((isset($modifsalles['categorie']) && $modifsalles['categorie'] == 'mariage')) echo 'checked';  ?>/>Mariage
		<br/><input type="text" id="" class="" name="reference" placeholder="refernce" value="<?php  echo $modifsalles['reference'];?>"/><br/>
		<br/><br/><input type="submit" value="valide" name="modifier"/><br/>
	</form>
	</br>
	</br>
	<?php
		}
	}
}
?>