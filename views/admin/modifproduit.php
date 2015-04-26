<h2>modifier produit</h2>
<?php 
	if(isset($_GET['id']))
	{
		if(isset($modifproduit)& is_array($modifproduit))
		{
			foreach($modifproduit as $modifproduits)
			{

//echo$modifproduits['id_produit'];
				echo'<form method="post">';
				echo'<br/><input type="hidden" name="id_produit" value="'.$modifproduits['id_produit'].'"/><br/>';
				echo'<br/><input type="date" name="date_arrivee" value="'.$modifproduits['date_arrivee'].'"/><br/>';
				echo'<br/><input type="date" name="date_depart" value="'.$modifproduits['date_depart'].'"/><br/>';
				echo'<br/><input type="text" name="id_salle" value="'.$modifproduits['id_salle'].'"/><br/>';
					if(isset($modifproduits['id_promo']))
					{
						echo'<br/><input type="text" name="id_promo" value="'.$modifproduits['id_promo'].'"/><br/>';

					}else
					{
						if(isset($promo)& is_array($promo))
							{
								echo '<br/><select name="id_promo">';
								foreach($promo as $promos)
									{


										echo '<option value="'.$promos['id_promo'].'">'.$promos['id_promo'].'/',$promos['code_promo'].'/',$promos['reduction'].'</option>';

									}
									echo '<option value="null">aucune promotion</option>';
		
			 						echo '</select><br/>';	
									}
					}

							echo'<br/><input type="text" name="prix" value="'.$modifproduits['prix'].'"/><br/>';
							//echo'<br/><input type="text" name="id_produit" value="'.$modifproduits['id_salle'].'"/><br/>';
							echo'<br/><input type="submit" name="valide" value="validé"/><br/>';


			}
		}







	}else{
		header("location:index.php?page=admin&&action=ajouterproduit");
	}