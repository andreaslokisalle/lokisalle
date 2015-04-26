<h2>detail salle</h2>
<?php
	if(isset($detailSalleModel) & is_array($detailSalleModel))
	{
		foreach ($detailSalleModel as $detailSalleModels) 
		{
			echo '<div>'.$detailSalleModels['titre'].'</div>';
			echo '<div>'.$detailSalleModels['pays'].'</div>';
			echo '<div>'.$detailSalleModels['ville'].'</div>';
			echo '<div>'.$detailSalleModels['adresse'].'</div>';
			echo '<div>'.$detailSalleModels['cp'].'</div>';
			echo '<div>'.$detailSalleModels['description'].'</div>';
			echo '<div>'.$detailSalleModels['capacite'].'</div>';
			echo '<div>'.$detailSalleModels['categorie'].'</div>';
				  
		     		 ?>


 <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.9/gmaps.min.js"></script>
                <script>
                    $(document).ready(function () {
                        var map = new GMaps({
                            div: '#map',
                            lat: 46.2276380,
                            lng: 2.2137490
                        });


                        GMaps.geocode({
                            address: "<? echo $detailSalleModels['adresse']." ".$detailSalleModels['ville']." ".$detailSalleModels['pays'] ?>",
                            callback: function (results, status) {
                                var firstResult = results[0];
                                map.setCenter(firstResult.geometry.location.lat(), firstResult.geometry.location.lng());
                                map.setZoom(15);
                                map.addMarker({
                                    lat: firstResult.geometry.location.lat(),
                                    lng: firstResult.geometry.location.lng(),
                                    title: "Cormoran",
                                    //icon: ""

                                });
                            }
                        });
                    });
                </script>



<div id="global">
            <div id="map" onClick="document.getElementById('lat').value=getCurrentLat();document.getElementById('lng').value=getCurrentLng();">
           

<?php			
			}
	}
  			echo '</div>
        </div>';
/*var_dump($_SESSION);*/

if(isset($avisdetailSalleModel) & is_array($avisdetailSalleModel))
	{
		foreach ($avisdetailSalleModel as $avisdetailSalleModel) 
		{
			echo '<div>'.$avisdetailSalleModel['pseudo'].'</div>';
			echo '<div>'.$avisdetailSalleModel['commentaire'].'</div>';
			echo '<div>'.$avisdetailSalleModel['note'].'</div>';
			echo '<div>'.$avisdetailSalleModel['date'].'</div>';
			
			
		}
	}

	if(isset($produitdetailSalleModel) & is_array($produitdetailSalleModel))
	{
		foreach ($produitdetailSalleModel as $produitdetailSalleModel) 
		{
			echo '<hr><div>'.$produitdetailSalleModel['date_arrivee'].'</div>';
			echo '<div>'.$produitdetailSalleModel['date_depart'].'</div>';
			echo '<div>'.$produitdetailSalleModel['prix'].'</div>';
			echo '<div>'.$produitdetailSalleModel['etat'].'</div>';
			if(membre())
					     {
					        echo'<form method="post" action="index.php?page=membre&&action=panier">';
					            echo'<input type="hidden"name="id_produit" value="'.$produitdetailSalleModel['id_produit'].'"/>';
					            echo'<input type="submit" name="ajouter_panier" value="ajouter_au_panier"/>';
					            echo'</form>';

					     }
		     		else
		     		{
		     			 echo'<div><a href="index.php?page=membre&&action=connexion">connecter vous pour ajouter au panier</a></div>';

		     		}
		     		echo '</hr>';
			}
	}
		     		

//var_dump($_SESSION);
if(membre())
	{
		echo'<form method="post">';
		
			
					/*foreach ($detailSalleModel as $detailSalleModels) 
					{*/
						echo'<br/><input type="hidden"  name="id_salle" value="'.$detailSalleModels['id_salle'].'"/>';
						//echo $detailSalleModels['id_salle'];
					//}
			echo'<br/><input type="text"  name="commentaire"/><br/>';
			echo'<br/><input type="text" name="note"/><br/>';
			echo'<br/><input type="submit" name="enregistreavis" value="envoyé" />';
			echo'</form>';
			if(isset($_POST['enregistreavis']))
				{
					enregistreavisController($_POST['enregistreavis']);
				}
//var_dump($_POST);
	}
else
	{
		echo'<div><a href="index.php?page=membre&&action=connexion">vous pouvez laisser un commentaire en vous connectant</a></div>';
	}
?>
               
                <!--<div id="map"></div>-->
