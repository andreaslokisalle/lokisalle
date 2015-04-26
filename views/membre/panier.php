<h2>Panier</h2>
<table border="1">
	<tr>
	
	<th>id_produit</th>
	<th>titre</th>
		<th>capacite</th>
	<th>date d arrivée</th>
	<th>date de depart</th>
	<th>prix</th>
	<th>ville</th>
	<th>retire</th>
	<th>TVA</th>
	<th>vider</th>
	
</tr>

<?php


	//var_dump($_SESSION['panier']);
			if(isset($_SESSION['panier']))
			{
				for($i =0; $i< count($_SESSION['panier']['titre']); $i++)
				{
					echo'<tr>';
									
											echo'<td>'.$_SESSION['panier']['id_produit'][$i].'</td>';
											echo'<td>'.$_SESSION['panier']['titre'][$i].'</td>';
											//echo'<td>'.$_SESSION['panier']['photo'] .'</td>';
											echo'<td>'.$_SESSION['panier']['capacite'][$i].'</td>';
											echo'<td>'.$_SESSION['panier']['date_arrivee'][$i].'</td>';
											echo'<td>'.$_SESSION['panier']['date_depart'][$i].'</td>';
											echo'<td>'.$_SESSION['panier']['prix'][$i].'</td>';
											echo'<td>'.$_SESSION['panier']['ville'][$i].'</td>';
											echo'<td>retire</td>';
											echo'<td>19.6</td>';
											 echo '<tr>';
				}
        					echo '<td ><form method="post" action="">';
							        echo '<button type="submit" name="action" value="vider" ">Vider mon panier</button>';
							        echo '</form>';
							        echo '</td>';
					        echo '</tr>';
						

						
						echo'</tr>';

				}
				else{

					echo'<td>votre panier est vide</td>';

				}
				    
	
	?>
</table>
<?php

if(isset($_POST['action']) && $_POST['action'] == 'vider') // si l'utilisateur clic sur le bouton vider son panier
{
    unset($_SESSION['panier']);
}
?>