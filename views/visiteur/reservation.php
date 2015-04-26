<h2>reservation</h2>
<article>
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
                  echo '<div  class="liendetaillsalle" ><a  class="adetaillesalle" href="index.php?page=membre&&action=detail_salle&&id='.$produitaccueils['id_salle'].'">Detail sur la salle </a></div>';

    echo'</div>';
         
     }
 }
?>
</article>