<h2>ajouter et modif de salle</h2>
</br>
<?php
/*if(isset($suppsalle))
{
	echo $suppsalle;
}*/
?>
<p class="lien_p_navigation"><a class="lien_a" href="index.php?page=admin&&action=ajoutersalle">Ajouter une salle </a></p>
<table border="1">
	<tr>
	
	<th>id_salle</th>
	<th>pays</th>
	<th>ville</th>
	<th>adresse</th>
	<th>cp</th>
	<th>titre</th>
	<th>description</th>
	<th>capacite</th>
	<th>categorie</th>
	<th>modifier</th>
	<th>Supprimer</th>
</tr>

		
		<?php if(isset($affichersalle ) && is_array($affichersalle ))
		{
			
			foreach ($affichersalle as $affichersalletousaffichage) 
			{
				
			

			echo'<tr>';
				
						echo '<td>'.$affichersalletousaffichage['id_salle'].'</td>';
						echo '<td>'.$affichersalletousaffichage['pays'].'</td>';
						echo '<td>'.$affichersalletousaffichage['ville'].'</td>';
						echo '<td>'.$affichersalletousaffichage['adresse'].'</td>';
						echo '<td>'.$affichersalletousaffichage['cp'].'</td>';
						echo '<td>'.$affichersalletousaffichage['titre'].'</td>';
						echo '<td>'.$affichersalletousaffichage['description'].'</td>';
						echo '<td>'.$affichersalletousaffichage['capacite'].'</td>';
						echo '<td>'.$affichersalletousaffichage['categorie'].'</td>';
						echo '<td><a href="index.php?page=admin&&action=modifsalle&&id='.$affichersalletousaffichage['id_salle'].'">modifier</a></td>';
						echo '<td><a href="index.php?page=admin&&action=sallesuppression&&id='.$affichersalletousaffichage['id_salle'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">suprrimer</a></td>';
			echo '</tr>';
				
			}
		}
		?>
		

</table>
