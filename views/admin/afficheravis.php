<h2>avis </h2>

<table border="1">
	<tr>
	
	<th>id_avis</th>
	<th>commentaire</th>
	<th>note</th>
	<th>id_salle</th>
	<th>titre</th>
	<th>date</th>
	<th>membre</th>
	<th>Supprimer</th>
</tr>



<?php
	if(isset($avisbdd) & is_array($avisbdd))
	{
		foreach($avisbdd as $avisbdds)
		{
			echo'<tr>';
		
				echo'<td>'.$avisbdds['id_avis'].'</td>';
				echo'<td>'.$avisbdds['commentaire'].'</td>';
				echo'<td>'.$avisbdds['note'].'</td>';
				echo'<td>'.$avisbdds['id_salle'].'</td>';
				echo'<td>'.$avisbdds['titre'].'</td>';
				echo'<td>'.$avisbdds['date'].'</td>';
				echo'<td>'.$avisbdds['pseudo'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=suppavis&&id='.$avisbdds['id_avis'].'" onClick="return(confirm(\' En êtes vous certain ?\'));" >supprimer</a></td>';
		echo'</tr>';



		}
	}
	?>
</table>