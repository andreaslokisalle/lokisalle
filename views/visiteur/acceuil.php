<article>
	<h2>acceuil</h2>
		<h3>la société lokisalle</h3>

<div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus ultricies nunc, laoreet rhoncus risus. Nulla facilisi. Sed vitae tortor vestibulum, blandit erat non, efficitur libero.
 Aliquam sit amet lorem porta, fermentum purus in, pretium est. Mauris iaculis eleifend egestas. Nulla feugiat nibh at arcu congue, at faucibus augue mollis. Fusce pulvinar nunc mi,
  imperdiet ornare purus vestibulum ac. Cras tempus lorem non diam venenatis, sed interdum ex elementum. Suspendisse varius ultricies 
  pellentesque. Quisque facilisis tincidunt turpis ut pellentesque. Duis orci sem, ullamcorper quis fermentum et, porttitor non tortor. 
  Quisque vehicula sapien quis mi luctus aliquam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus ultricies nunc, laoreet rhoncus risus. Nulla facilisi. Sed vitae tortor vestibulum, blandit erat non, efficitur libero.
 Aliquam sit amet lorem porta, fermentum purus in, pretium est. Mauris iaculis eleifend egestas. Nulla feugiat nibh at arcu congue, at faucibus augue mollis. Fusce pulvinar nunc mi,
  imperdiet ornare purus vestibulum ac. Cras tempus lorem non diam venenatis, sed interdum ex elementum. Suspendisse varius ultricies 
  pellentesque. Quisque facilisis tincidunt turpis ut pellentesque. Duis orci sem, ullamcorper quis fermentum et, porttitor non tortor. 
  Quisque vehicula sapien quis mi luctus aliquam.</p></div>


	<?php 
	//var_dump($produitaccueil);
	if(isset($produitaccueil) & is_array($produitaccueil))
 {
    foreach ($produitaccueil as $produitaccueils) 
  
     	{

echo '<div class="blocpresnetationsalle">';

                 /*echo '<td>'.$produitaccueils['photo'].'</td>';*/
                 echo '<div class="divimage"><img/></div>';
                  echo '<div>'.$produitaccueils['capacite'].'</div>';
                    echo '<div>'.$produitaccueils['titre'].'</div>';
                  echo '<div>'.$produitaccueils['date_arrivee'].'</div>';
                  echo '<div>'.$produitaccueils['date_depart'].'</div>';
                  echo '<div>'.$produitaccueils['prix'].'</div>';
                  echo '<div class="liendetaillsalle"><a class="adetaillesalle" href="index.php?page=membre&&action=detail_salle&&id='.$produitaccueils['id_salle'].'">Detail sur la salle </a></div>';

 
         
    
     if(membre())
     {
        echo'<form method="post" action="index.php?page=membre&&action=panier">';
            echo'<input type="hidden"name="id_produit" value="'.$produitaccueils['id_produit'].'"/>';
            echo'<input type="submit" name="ajouter_panier" value="ajouter_au_panier"/><br/>';

        echo'</form>';

     }
     else
     {
      echo'<div><a href="index.php?page=membre&&action=connexion">connecter vous pour ajouter au panier</a></div><br/>';

     }
 echo'</div>';
  }
 }
?>
</article>