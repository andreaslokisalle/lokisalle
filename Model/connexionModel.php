<?php
include_once'Model.php';

function connexion_Verification($mdp, $pseudo)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT id_membre,mdp,pseudo,nom,prenom,email,statut,adresse,cp,ville,sexe FROM membre WHERE mdp = :mdp AND pseudo = :pseudo");
	$req->bindParam(':mdp',$mdp);
	$req->bindParam(':pseudo',$pseudo);
	$req->bindParam(':mdp', $mdp);
    $req->execute();
	return $req->fetch();
}
