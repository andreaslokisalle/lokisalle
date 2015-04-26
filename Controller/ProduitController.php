<?php
include_once'Controllermembrev.php';
include_once'Controller.php';
include_once'./Model/ProduitModel.php';

echo '<hr>ControllerProduit</hr>';
function gestionSalleController()
{
	membreNavigationAdmin();

return render('./views/admin/gestionsalle.php');
}
function ajouterUneSalleController()
{

	$msg2='';
	$error='';
	membreNavigationAdmin();
	if(isset($_POST['valide']))
	{

		/*$reference = verif_ref($_POST['reference']);
		if($reference == 0)
		{
			$msg2 .="dls la reference existe deja";

		}*/
		
		if(!empty($_FILES['photo']['name']))
			{
				if(VerifExtensionPhoto())
						{ 
			
				                $nom_photo = $_POST['titre'].'_'.$_FILES['photo']['name'];; 
				                $photo_bdd = "./web/photosalle/$nom_photo"; 
				                $photo_dossier ="./web/photosalle/$nom_photo"; 
				                copy($_FILES['photo']['tmp_name'], $photo_dossier);
			
						}
						else
						{
							$error .="<div class='danger'>probleme de d'extension</div>";
			
				$var = array('error'=>$error);
				return render('./views/admin/ajoutersalle.php',$var);
						}
			}
		if(empty($msg2))
		{

			enregistrementsalle($_POST['id_salle'],$_POST['pays'],$_POST['ville'],$_POST['adresse'],$_POST['cp'],$_POST['titre'],$_POST['description'],$_POST['capacite'],$_POST['categorie'],$_POST['reference'],$_POST['photo']);
			

			$validation = "<div class='valider'>la salle etais ajouté </div>";
			$var = array('validation'=>$validation);
			return render('./views/admin/ajoutersalle.php',$var);




			header("location:index.php?page=admin&&action=modisupsalle");
			



			exit();


		}
		/*else
		{
			$error.='<div class="danger>probléme insertion en base de donnée</div>"';
		}*/



	}


$var = array('msg2'=>$msg2);
return render('./views/admin/ajoutersalle.php',$var);
}
function afficherSallemofifsupp()
{
	membreNavigationAdmin();
	

	$affichersalle = tousLesSalles();

/*var_dump($affichersalle);*/

$var =array('affichersalle'=>$affichersalle);
/*var_dump($var);*/
return render('./views/admin/ajoutersupprimersalle.php',$var);

}
function supprimerSalleController()
{
	
		membreNavigationAdmin();
		if(isset($_GET['id']))
		{
			supprimeruneSalle($_GET['id']);
		
		header("location:index.php?page=admin&&action=modisupsalle");
		exit();
		}
	


}

function ModifSalleController()
{
	echo 'je suis dans le fonction ';
		membreNavigationAdmin();
	
	echo 'je suis dans le if ';
	
		 $modifsalle = modifSalleModel($_GET['id']);
var_dump($modifsalle);
		

		
		if(isset($_POST['modifier']))
		{
			Modifsalleenregistrement($_POST['id_salle'],$_POST['pays'],$_POST['ville'],$_POST['adresse'],$_POST['cp'],$_POST['titre'],$_POST['description'],$_POST['capacite'],$_POST['categorie'],$_POST['reference']);
			header("location:index.php?page=admin&&action=modisupsalle");
		}
		
	
$var = array("modifsalle"=>$modifsalle);
		return render('./views/admin/modifiersalle.php',$var);
		
}
/* ---------------------------------------------------------gestion des produits------------------------------------------------------------------------------------ */
function gestionProduitController()
{
	membreNavigationAdmin();

return render('./views/admin/gestionproduit.php');
}
function ajoutProduitController()
{ 
	
	membreNavigationAdmin();
	 $produitsalle = salleselectionajoutProduit();
	 $promo = codepromoPourProduit();
	 if(isset($_POST['enregistre']))
	 {
var_dump($_POST);


	 	ajouterUnProduit($_POST['id_salle'],$_POST['id_promo'],$_POST['date_arrivee'],$_POST['date_depart'],$_POST['prix'],$_POST['etat']);


	/*header("location:index.php?page=admin&&action=afficherproduit");*/
	








	 }
	 
$var = array('produitsalle'=>$produitsalle,'promo'=>$promo);


return render('./views/admin/ajoutproduit.php',$var);

}
function afficherproduit()
{
	$produittous =  SelectionProduitmodel();
	$date_arriveeasc = SelectionProduitmodeldaasc();
	$date_departasc = SelectionProduitmodelddasc();
	$montansac = SelectionProduitmodelmontantdasc();
	$montantdesc = SelectionProduitmodelmontantDESC();
	$var = array('produittous'=>$produittous,
		'date_arriveeasc'=>$date_arriveeasc,
		'date_departasc'=>$date_departasc,
		'montansac'=>$montansac,
		'montantdesc'=>$montantdesc);

return render('./views/admin/afficherproduit.php',$var);
}
function suppproduitController()
{
	membreNavigationAdmin();
	if(isset($_GET['id']))
	{
		supprimerunproduit($_GET['id']);

		
		header("location:index.php?page=admin&&action=afficher_produit");
		exit();
		
	}
} 
function modifproduitController()
{

	Modifunproduit($_GET['id']);
	$modifproduit = Modifunproduit($_GET['id']);
	$promo =codepromoPourProduit();
	if(isset($_POST['envoye']))
	{

		ModifsProduit($_POST['id_salle'],$_POST['id_promo'],$_POST['date_arrivee'],$_POST['date_depart'],$_POST['prix'],$_POST['id_produit']);       



	}


$var = array('modifproduit'=>$modifproduit,'promo'=>$promo);


	return render('./views/admin/modifproduit.php',$var);
} 

/*---------------------------------------------------gestion promo---------------------------------------------------------------------------------*/
function supprimerPromoController()
{
	
		membreNavigationAdmin();
		
		if(isset($_GET['id']))
		{
			supp_promoModel($_GET['id']);
			header("location:index.php?page=admin&&action=afficherpromo");
			
			exit();

		}
	


}
function gestionpromoController()
{
	membreNavigationAdmin();
	return render('./views/admin/gestionpromo.php');
} 
function ajoutpromoController()/*nouvelle*/
{
	membreNavigationAdmin();
	if(isset($_POST['enregistrementcodepromo']))
	{
		ajouterCodePromoModel($_POST['code_promo'],$_POST['reduction']);
	
		header("location:index.php?page=admin&&action=afficherpromo");
	}



	return render('./views/admin/ajoutpromo.php');
} 
function AffichePromoController()
{
membreNavigationAdmin();
/*var_dump($codepromo);*/
$codepromo = tousLescodepromo();
/*var_dump($codepromo);*/
$var = array('codepromo'=>$codepromo);

/*var_dump($codepromo);*/

	return render('./views/admin/afficherpromo.php',$var);
}
//echo '<hr>fonctio nmodif promo</hr>';
function modifpromoController()
{
	echo '<hr>je suis dans la fonction</hr>';
	membreNavigationAdmin();
	
		//echo '<hr>je suis dans le if id</hr>';
		modifpromoModel($_GET['id']);
		$modifpromo = modifpromoModel($_GET['id']);
		//var_dump($modifpromo);
		$var = array('modifpromo' =>$modifpromo);
		//var_dump($var);
		//echo '<hr>je suis au dessus if isset poste</hr>';
			if(isset($_POST['modifpromo']))
				{
					ajoutermodifpromoModel($_POST['id'],$_POST['code_promo'],$_POST['reduction']);
						/*header("location:index.php?page=admin&&action=afficherpromo");*/
						
				}
		
	
		return render('./views/admin/modifpromo.php',$var);

} 



/*--------------------------------------------------------------------------membre---------------------------------------------------------------------------------------*/
function gestionmembreController()
{
	membreNavigationAdmin();
	return render('./views/admin/gestionmembre.php');
} 
function ajoutermembreController()
{
	membreNavigationAdmin();
	if(isset($_POST['ajoutermembre']))
	{ 
		//var_dump($_POST); die();
		ajouter_Membre_admin($_POST['pseudo'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['sexe'],$_POST['ville'],$_POST['cp'],$_POST['adresse'],$_POST['statut']);
		header("location:index.php?page=admin&&action=affichermembre");
	}
	return render('./views/admin/ajoutmembre.php');
}
 
function AfficherMembreController()
{
	membreNavigationAdmin();
	$membreaffiche = afficherMembre();
	$var = array("membreaffiche" =>$membreaffiche );

	return render('./views/admin/affichemembre.php',$var);
} 
function supprimerMembreController()
{
	/*$msgsup ='';*/
		membreNavigationAdmin();
		if(isset($_GET['id']))
		{
			supprimerunMembre($_GET['id']);
			header("location:index.php?page=admin&&action=affichermembre");
			
			exit();

		}
		


}
/*-------------------------------------------------avis------------------------------------------*/


function avisController()
{
	membreNavigationAdmin();

      $avisbdd = avisModel();
      $var = array('avisbdd'=>$avisbdd);
return render('./views/admin/afficheravis.php',$var);

}
function supprimeravisController()
{
		membreNavigationAdmin();
		if(isset($_GET['id']))
		{
			supprimerunavis($_GET['id']);
			header("location:index.php?page=admin&&action=avis");
			
			exit();

		}
		


}


/*--------------------------------------------------------commande------------------------------------------------*/
/*function commandeController()
{
	

	if(isset($_GET['m']) )
	{ 
			$commandeasc = CommandeMMModel();
			//var_dump($commandeasc);
			$chiffreaffaire = ChiffreaffaireCommandeModel();
			$var = array('commandeasc'=>$commandeasc,
				'chiffreaffaire'=>$chiffreaffaire);



			return render('./views/admin/commande.php',$var);
	}
	elseif (isset($_GET['d']))
	 {
		
		$commandedesc = CommandeDDModel();
		$chiffreaffaire = ChiffreaffaireCommandeModel();
		$var = array('commandedesc'=>$commandedesc,
					'chiffreaffaire'=>$chiffreaffaire);



		$chiffreaffaire = ChiffreaffaireCommandeModel();

		return render('./views/admin/commande.php',$var);

	}
	
		
			$commande = CommandeModel();

			$chiffreaffaire = ChiffreaffaireCommandeModel();
			$var = array('commande'=>$commande,
				'chiffreaffaire'=>$chiffreaffaire);






				return render('./views/admin/commande.php',$var);

		
	


}*/
function commandeController()
{
	

/*if(isset($_GET['id'])){

	DetailCommande($_GET['id']);
	$datailcommandemembre = DetailCommande($_GET['id']);

$commandeasc = CommandeMMModel();
			//var_dump($commandeasc);
		

var_dump($datailcommandemembre);

		
		$commandedesc = CommandeDDModel();
	





	
		
			$commande = CommandeModel();

			$chiffreaffaire = ChiffreaffaireCommandeModel();
			$var = array('commande'=>$commande,
				'chiffreaffaire'=>$chiffreaffaire,
				'commandedesc'=>$commandedesc,
				'commandeasc'=>$commandeasc,
				'datailcommandemembre'=>$datailcommandemembre);






				return render('./views/admin/commande.php',$var);

		
	





}*/




			DetailCommande($_GET['id']);
	$datailcommandemembre = DetailCommande($_GET['id']);

$commandeasc = CommandeMMModel();
			//var_dump($commandeasc);
		

var_dump($datailcommandemembre);

		
		$commandedesc = CommandeDDModel();
	





	
		
			$commande = CommandeModel();

			$chiffreaffaire = ChiffreaffaireCommandeModel();
			$var = array('commande'=>$commande,
				'chiffreaffaire'=>$chiffreaffaire,
				'commandedesc'=>$commandedesc,
				'commandeasc'=>$commandeasc,
				'datailcommandemembre'=>$datailcommandemembre);






				return render('./views/admin/commande.php',$var);

		
	



}
function newletterController()
{
membreNavigationAdmin();





				return render('./views/admin/newsletter.php');	
}


