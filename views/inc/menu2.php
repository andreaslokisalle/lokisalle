
<nav class="nav">
				<ul class="nav_ul" >

<?php 
if(membre())
{
echo
			
	'<li class="nav_ul_li"><a class="nav_ul_li_a" href="index.php?page=membre&&action=acceuil">Accueil</a></li>
				<li class="nav_ul_li" ><a class="nav_ul_li_a" href="index.php?page=membre&&action=reservation">Réservation</a></li>
				<li class="nav_ul_li" ><a class="nav_ul_li_a" href="index.php?page=membre&&action=recherche">Recherche</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=profile">Profile</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=panier">Panier</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=contact">Contact</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=deconnexion">deconnexion</a></li>
				';
						
}
else
{
echo
			
				'<li class="nav_ul_li"><a class="nav_ul_li_a" href="index.php?page=membre&&action=acceuil">Accueil</a></li>
				<li class="nav_ul_li" ><a class="nav_ul_li_a" href="index.php?page=membre&&action=reservation">Réservation</a></li>
				<li class="nav_ul_li" ><a class="nav_ul_li_a" href="index.php?page=membre&&action=recherche">Recherche</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=connexion">connexion</a></li>
				<li class="nav_ul_li" ><a  class="nav_ul_li_a" href="index.php?page=membre&&action=creeuncompte">Cree compte</a></li>';
						
}

?>
		</ul>
</nav>