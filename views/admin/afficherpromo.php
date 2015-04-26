<h2>afficher promo</h2>
<table border="1">
<th>id_promo</th>
	<th>code promo</th>
	<th>reduction</th>
	<th>modifier</th>
	<th>supprimer</th>

<?php

if(isset($codepromo) & is_array($codepromo))
{
	foreach($codepromo as $codepromos)
	{

					echo'<tr>';
						echo '<td>'.$codepromos['id_promo'].'</td>';
						echo '<td>'.$codepromos['code_promo'].'</td>';
						echo '<td>'.$codepromos['reduction'].'</td>';
						echo '<td><a href="index.php?page=admin&&action=modifpromo&&id='.$codepromos['id_promo'].'">modifier</a></td>';
						echo '<td><a href="index.php?page=admin&&action=supp_promo&&id='.$codepromos['id_promo'].'" onClick="return(confirm(\' En êtes vous certain ?\'));">suprrimer</a></td>';
					echo '</tr>';

	


	}
}
?>
</table>