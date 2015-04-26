<h2>ajouter produit</h2>
<?php
if(isset($produitsalle) && is_array($produitsalle))
{
			echo'<form method="post">';
			echo '<select style="width:350px" name="id_salle">';
	foreach ($produitsalle as $produitsalles ) 


	{
		echo '<option value="'.$produitsalles['id_salle'].'">'.$produitsalles['id_salle'].'/',$produitsalles['pays'].'/',$produitsalles['ville'].'/',$produitsalles['adresse'].'/',$produitsalles['capacite'].'/',$produitsalles['categorie'].'</option><br/>';
	
	}
	 echo '</select><br/>';
		echo '<select name="id_promo">';
	foreach ($promo as $promos )


	{
		echo '<option value="'.$promos['id_promo'].'">'.$promos['id_promo'].'/',$promos['code_promo'].'/',$promos['reduction'].'</option>';
		

	
	}
		echo '<option value="null">aucune promotion</option>';
	
		 echo '</select><br/>';	
			
			 

	echo'<br/><input type="date" id="" class="" name="date_arrivee" placeholder="date_arrivee" value="datea" ><br/>';
	echo'<br/><input type="date" id="" class="" name="date_depart" placeholder="date_depart" value="" ><br/>';

	echo'<br/><input type="text" id="" class="" name="prix" placeholder="prix" value="" ><br/>';
	
	
	echo'<br/><input type="hidden" id="" class="" name="etat" placeholder="prix" value="NULL" ><br/>';
	echo'	<br/><input type="submit" id="" class="" name="enregistre" value="enregistre"><br/>';

		

			 echo'</form>';
			
var_dump($_POST);
		
}

?>




