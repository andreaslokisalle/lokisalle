<h2>afficher produit</h2>
<?php
if(isset($msg))
{
	echo $msg;
}
?>

<table border="1">
	<tr>
	
	<th>id_produit</th>
	<th>date_arrivee <a href="index.php?page=admin&&action=afficher_produit&&da=date_a"/><p>trier par date</p></th>
	<th>date_depart<a href="index.php?page=admin&&action=afficher_produit&&dd=date_p"/><p>trier par date</p></th>
	<th>id_salle</th>
	<th>id_promo</th>
	<th>etat</th>
	<th>prix<a href="index.php?page=admin&&action=afficher_produit&&mon=asc"/><p>monte</p> // <a href="index.php?page=admin&&action=afficher_produit&&mont=desc"/><p>desecndre</p></th>
	<th>statut</th>
	<th>Supprimer</th>
</tr>







<?php
if(isset($_GET['da']))
{
	if(isset($date_arriveeasc) & is_array($date_arriveeasc))
	{
		foreach($date_arriveeasc as $date_arriveeasc)
		{



			echo'<tr>';
		
				echo'<td>'.$date_arriveeasc['id_produit'].'</td>';
				echo'<td>'.$date_arriveeasc['date_arrivee'].'</td>';
				echo'<td>'.$date_arriveeasc['date_depart'].'</td>';
				echo'<td>'.$date_arriveeasc['id_salle'].'</td>';
				echo'<td>'.$date_arriveeasc['id_promo'].'</td>';
				echo'<td>'.$date_arriveeasc['etat'].'</td>';
				echo'<td>'.$date_arriveeasc['prix'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=modifproduit&&id='.$date_arriveeasc['id_produit'].'">modifier</a></td>';
				echo'<td><a href="index.php?page=admin&&action=suppproduit&&id='.$date_arriveeasc['id_produit'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">supprimer</a></td>';
			echo'</tr>';
		}
	}
}
elseif(isset($_GET['dd']))
{
	if(isset($date_departasc) & is_array($date_departasc))
	{
		foreach($date_departasc as $date_departasc)
		{



			echo'<tr>';
		
				echo'<td>'.$date_departasc['id_produit'].'</td>';
				echo'<td>'.$date_departasc['date_arrivee'].'</td>';
				echo'<td>'.$date_departasc['date_depart'].'</td>';
				echo'<td>'.$date_departasc['id_salle'].'</td>';
				echo'<td>'.$date_departasc['id_promo'].'</td>';
				echo'<td>'.$date_departasc['etat'].'</td>';
				echo'<td>'.$date_departasc['prix'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=modifproduit&&id='.$date_departasc['id_produit'].'">modifier</a></td>';
				echo'<td><a href="index.php?page=admin&&action=suppproduit&&id='.$date_departasc['id_produit'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">supprimer</a></td>';
			echo'</tr>';
		}
	}
}
elseif(isset($_GET['mont']))
{
	if(isset($montansac) & is_array($montansac))
	{
		foreach($montansac as $montansac)
		{



			echo'<tr>';
		
				echo'<td>'.$montansac['id_produit'].'</td>';
				echo'<td>'.$montansac['date_arrivee'].'</td>';
				echo'<td>'.$montansac['date_depart'].'</td>';
				echo'<td>'.$montansac['id_salle'].'</td>';
				echo'<td>'.$montansac['id_promo'].'</td>';
				echo'<td>'.$montansac['etat'].'</td>';
				echo'<td>'.$montansac['prix'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=modifproduit&&id='.$montansac['id_produit'].'">modifier</a></td>';
				echo'<td><a href="index.php?page=admin&&action=suppproduit&&id='.$montansac['id_produit'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">supprimer</a></td>';
			echo'</tr>';
		}
	}
}
elseif(isset($_GET['mon']))
{
	if(isset($montantdesc) & is_array($montantdesc))
	{
		foreach($montantdesc as $montantdesc)
		{



			echo'<tr>';
		
				echo'<td>'.$montantdesc['id_produit'].'</td>';
				echo'<td>'.$montantdesc['date_arrivee'].'</td>';
				echo'<td>'.$montantdesc['date_depart'].'</td>';
				echo'<td>'.$montantdesc['id_salle'].'</td>';
				echo'<td>'.$montantdesc['id_promo'].'</td>';
				echo'<td>'.$montantdesc['etat'].'</td>';
				echo'<td>'.$montantdesc['prix'].'</td>';
				echo'<td><a href="index.php?page=admin&&action=modifproduit&&id='.$montantdesc['id_produit'].'">modifier</a></td>';
				echo'<td><a href="index.php?page=admin&&action=suppproduit&&id='.$montantdesc['id_produit'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">supprimer</a></td>';
			echo'</tr>';
		}
	}
}
else
	{
		if(isset($produittous) & is_array($produittous))
		{
			foreach($produittous as $produittouss)
			{
	
	
	
				echo'<tr>';
			
					echo'<td>'.$produittouss['id_produit'].'</td>';
					echo'<td>'.$produittouss['date_arrivee'].'</td>';
					echo'<td>'.$produittouss['date_depart'].'</td>';
					echo'<td>'.$produittouss['id_salle'].'</td>';
					echo'<td>'.$produittouss['id_promo'].'</td>';
					echo'<td>'.$produittouss['etat'].'</td>';
					echo'<td>'.$produittouss['prix'].'</td>';
					echo'<td><a href="index.php?page=admin&&action=modifproduit&&id='.$produittouss['id_produit'].'">modifier</a></td>';
					echo'<td><a href="index.php?page=admin&&action=suppproduit&&id='.$produittouss['id_produit'].'"onClick="return(confirm(\' En êtes vous certain ?\'));">supprimer</a></td>';
				echo'</tr>';
		}
	}
	}















?>
</table>