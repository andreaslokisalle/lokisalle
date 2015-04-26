
<h2> Affiche membre </h2>
<table border="1">
	<tr>
	
	<th>id_membre</th>
	<th>pseudo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>sexe</th>
	<th>ville</th>
	<th>cp</th>
	<th>adresse</th>
	<th>statut</th>
	<th>Supprimer</th>
</tr>
<?php
if(isset($membreaffiche ) & is_array($membreaffiche ))
{
	foreach ($membreaffiche as $membreaffiches ) 
	{
		echo'<tr>';
		
				echo'<td>'.$membreaffiches['id_membre'].'</td>';
				echo'<td>'.$membreaffiches['pseudo'].'</td>';
				echo'<td>'.$membreaffiches['nom'].'</td>';
				echo'<td>'.$membreaffiches['prenom'].'</td>';
				echo'<td>'.$membreaffiches['email'].'</td>';
				echo'<td>'.$membreaffiches['sexe'].'</td>';
				echo'<td>'.$membreaffiches['ville'].'</td>';
				echo'<td>'.$membreaffiches['cp'].'</td>';
				echo'<td>'.$membreaffiches['adresse'].'</td>';
				echo'<td>'.$membreaffiches['statut'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=suppmembre&&id='.$membreaffiches['id_membre'].'" onClick="return(confirm(\' En êtes vous certain ?\'));" >supprimer</a></td>';
		echo'</tr>';

	}
}
?>
</table>