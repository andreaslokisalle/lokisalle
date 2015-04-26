
<nav class="nav_admin">
				<ul class="nav_ul_admin" >

<?php 
if(membreAdmin())
{
echo
			
	'<li class="nav_ul_li_admin" ><a  class="nav_ul_li_a_admin" href="index.php?page=admin&&action=gestionsalle">gestion  salle</a></li>
 	<li class="nav_ul_li_admin"><a class="nav_ul_li_a_admin" href="index.php?page=admin&&action=gestionpoduit">gestion  produit</a></li>
		<li class="nav_ul_li_admin" ><a class="nav_ul_li_a_admin" href="index.php?page=admin&&action=avis">gestion  avis</a></li>
		<li class="nav_ul_li_admin" ><a class="nav_ul_li_a_admin" href="index.php?page=admin&&action=gestionpromo">gestion code promos</a></li>
		<li class="nav_ul_li_admin" ><a  class="nav_ul_li_a_admin" href="index.php?page=admin&&action=gestionmembre">gestion membres</a></li>
		<li class="nav_ul_li_admin" ><a  class="nav_ul_li_a_admin" href="index.php?page=admin&&action=commande">gestion  commandes</a></li>
		<li class="nav_ul_li_admin" ><a  class="nav_ul_li_a_admin" href="index.php?page=admin&&action=newsletter">Envoye newsletter</a></li>
		<li class="nav_ul_li_admin" ><a  class="nav_ul_li_a_admin" href="">Statistique</a></li>';
						
}
?>
		</ul>
</nav>