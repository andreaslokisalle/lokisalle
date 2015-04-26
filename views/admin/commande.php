<h2>Commande</h2>
<table border="1">
	<th>id_commande</th>
	<th>id_membre</th>
	<th>montant<a href="index.php?page=admin&&action=commande&&m=asc">  montant // </a><a href="index.php?page=admin&&action=commande&&d=desc">decendant</a></th>
	

<?php





if(isset($_GET['m']))
{
	if(isset($commandeasc) & is_array($commandeasc))
		{ 

			foreach($commandeasc as $commandeascs)
			{
				echo'<tr>';
								echo '<td><a href="index.php?page=admin&&action=commande&&id='.$commandeascs['id_membre'].'">'.$commandeascs['id_commande'].'</a></td>';
								echo '<td>'.$commandeascs['id_membre'].'</td>';
								echo '<td>'.$commandeascs['montant'].'</td>';
							echo '</tr>';

							

			


			}

		}
		
}elseif(isset($_GET['d']))
{
	if(isset($commandedesc) & is_array($commandedesc))
		{ 

			foreach($commandedesc as $commandedesc)
			{
				echo'<tr>';
								echo '<td><a href="index.php?page=admin&&action=commande&&id='.$commandedesc['id_membre'].'">'.$commandedesc['id_commande'].'</a></td>';
								echo '<td>'.$commandedesc['id_membre'].'</td>';
								echo '<td>'.$commandedesc['montant'].'</td>';
							echo '</tr>';

							

			


			}

		}

}
else
	{
		if(isset($commande) & is_array($commande))
			{
				foreach($commande as $commandes)
				{
	
								echo'<tr>';
									echo '<td><a href="index.php?page=admin&&action=commande&&id='.$commandes['id_membre'].'">'.$commandes['id_commande'].'</a></td>';
									echo '<td>'.$commandes['id_membre'].'</td>';
									echo '<td>'.$commandes['montant'].'</td>';
								echo '</tr>';
								
	
				
	
	
				}
			}
			
	}
	

//var_dump($chiffreaffaire);

?>
</table>
<?php
if(isset($_GET['id']))
	{
 echo '<table border="1">';
	echo'<th>id_commande</th>';
	echo '<th>id_membre</th>';


echo 'je suis la' ;
		if(isset($datailcommandemembre) & is_array($datailcommandemembre))
			{
				foreach($datailcommandemembre as $datailcommandemembre)
				{
						echo 'je suis la' ;
						echo '<td>'.$datailcommandemembre['id_commande'].'</td>';
						echo '<td>'.$datailcommandemembre['montant'].'</td>';
						echo '<td>'.$datailcommandemembre['date'].'</td>';
						echo '<td>'.$datailcommandemembre['montant'].'</td>';
						echo '<td>'.$datailcommandemembre['id_membre'].'</td>';
						echo '<td>'.$datailcommandemembre['pseudo'].'</td>';
						echo '<td>'.$datailcommandemembre['id_produit'].'</td>';
						echo '<td>'.$datailcommandemembre['montant'].'</td>';
						echo '<td>'.$datailcommandemembre['id_salle'].'</td>';
						echo '<td>'.$datailcommandemembre['ville'].'</td>';
						
	
				
	
	
				}
			}
	}

?>
</table

<?php




if(isset($chiffreaffaire) & is_array($chiffreaffaire))
{
	foreach($chiffreaffaire as $chiffreaffaire)
	{

		echo '<br/> notre chiffre d affaire est de'.$chiffreaffaire['sum(montant)'];			


	}
}

