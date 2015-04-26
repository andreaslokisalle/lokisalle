<?php

$routes = array(


	/*gestion membre visiteur*/
	"membre" => array(
			/*-----------------connexion------------------------------*/
		"creeuncompte"=>array(
			"action"=>"cree_Un_compte",
			"controller"=>"MembreController"),
		
		"connexion"=>array(
			"action"=>"connexionMembre",
			"controller"=>"connexionController"),
		"mot_passe_perdu"=>array(
			"action"=>"mdpperduController",
			"controller"=>"connexionController"),
		/*-----------------Membre------------------------------*/

		"profile"=>array(
			"action"=>"profileController",
			"controller"=>"MembreController"),
		"deconnexion"=>array(
			"action"=>"deconnexioncontoller",
			"controller"=>"connexionController"),
		"reservation"=>array(
			"action"=>"",
			"controller"=>"MembreController"),
		"panier"=>array(
			"action"=>"",
			"controller"=>"MembreController"),
		"recherche"=>array(
			"action"=>"",
			"controller"=>"MembreController"),
		"modifierprofile"=>array(
			"action"=>"modifier_profile_controller",
			"controller"=>"MembreController"),
		"panier"=>array(
			"action"=>"PanierController",
			"controller"=>"MembreController"),
		"viderpanier"=>array(
			"action"=>"vidermonPanier",
			"controller"=>"MembreController"),
		"news_letter"=>array(
			"action"=>"newletterinscription",
			"controller"=>"MembreController"),

		/*-----------------Visiteur------------------------------*/
		"ajoutercommentaire"=>array(
			"action"=>"enregistreavisController",
			"controller"=>"visiteurController"),
		"recherche"=>array(
			"action"=>"rechercheController",
			"controller"=>"visiteurController"),
		"reservation"=>array(
			"action"=>"reservationController",
			"controller"=>"visiteurController"),
		"plandusite"=>array(
			"action"=>"PlanDuSiteController",
			"controller"=>"visiteurController"),
		"conditiongenerale"=>array(
			"action"=>"ConditionGeneraleController",
			"controller"=>"visiteurController"),
		"mentionlegal"=>array(
			"action"=>"mentionLegalController",
			"controller"=>"visiteurController"),
		"contact"=>array(
			"action"=>"contactController",
			"controller"=>"visiteurController"),
		"acceuil"=>array(
			"action"=>"acceuilController",
			"controller"=>"visiteurController"),
		"detail_salle"=>array(
			"action"=>"detailSalleController",
			"controller"=>"visiteurController"),

		
		


	),
	"admin"=>array(
		/*-------------------------------salle--------------------------*/
		"gestionsalle"=>array(
				"action"=>"gestionSalleController",
				"controller"=>"ProduitController"),
		"modisupsalle"=>array(
				"action"=>"afficherSallemofifsupp",
				"controller"=>"ProduitController"),
		"ajoutersalle"=>array(
				"action"=>"ajouterUneSalleController",
				"controller"=>"ProduitController"),
		"sallesuppression"=>array(
				"action"=>"supprimerSalleController",
				"controller"=>"ProduitController"),
		"modifsalle"=>array(
			"action"=>"ModifSalleController",
			"controller"=>"ProduitController"),
		/*--------------------produit--------------------------*/
		"gestionpoduit"=>array(
				"action"=>"gestionProduitController",
				"controller"=>"ProduitController"),
		"ajouterproduit"=>array(
				"action"=>"ajoutProduitController",
				"controller"=>"ProduitController"),
		"afficher_produit"=>array(
				"action"=>"afficherproduit",
				"controller"=>"ProduitController"),
		"suppproduit"=>array(
				"action"=>"suppproduitController",
				"controller"=>"ProduitController"),
		"modifproduit"=>array(
				"action"=>"modifproduitController",
				"controller"=>"ProduitController"),
		/*------------------------------------promo-----------------------------------------*/
		"gestionpromo"=>array(
				"action"=>"gestionpromoController",
				"controller"=>"ProduitController"),
		"afficherpromo"=>array(
				"action"=>"AffichePromoController",
				"controller"=>"ProduitController"),
		"ajouterspromo"=>array(
				"action"=>"ajoutpromoController",
				"controller"=>"ProduitController"),
		"supp_promo"=>array(
				"action"=>"supprimerPromoController",
				"controller"=>"ProduitController"),
		"modifpromo"=>array(
				"action"=>"modifpromoController",
				"controller"=>"ProduitController"),

		/*----------------------------------membre------------------------------------*/
		"gestionmembre"=>array(
				"action"=>"gestionmembreController",
				"controller"=>"ProduitController"),
		"ajoutermembre"=>array(
				"action"=>"ajoutermembreController",
				"controller"=>"ProduitController"),
		"affichermembre"=>array(
				"action"=>"AfficherMembreController",
				"controller"=>"ProduitController"),
		"suppmembre"=>array(
				"action"=>"supprimerMembreController",
				"controller"=>"ProduitController"),
/*---------------------------------avis----------------------------------*/
		"avis"=>array(
				"action"=>"avisController",
				"controller"=>"ProduitController"),
		"suppavis"=>array(
				"action"=>"supprimeravisController",
				"controller"=>"ProduitController"),


/*----------------------------commande--------------------------------------*/
"commande"=>array(
				"action"=>"commandeController",
				"controller"=>"ProduitController"),


/*-------------------------------news letter -------------------------------*/

"newsletter"=>array(
				"action"=>"newletterController",
				"controller"=>"ProduitController"),





		)
		/*membre fin*/
		
		
/*connexion*/

		
		
/*fin de routes*/);	




/*

	"page dans l'url" => array( index.php?page=
		"cheminurl" =>array(
			"action" => "function dans le controller",
			"controller"=> "non du controller",*/
		
