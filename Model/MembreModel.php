<?php
include_once 'Model.php';

function cree_un_nouveau_compte_bdd($pseudo,$mdp,$nom,$prenom,$email,$sexe,$ville,$cp,$adresse)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("INSERT INTO membre set pseudo = :pseudo,mdp = :mdp,nom = :nom,prenom = :prenom,email = :email,sexe = :sexe,ville = :ville,cp = :cp,adresse = :adresse");
	$req->bindParam(':pseudo',$pseudo);
	$req->bindParam(':mdp',$mdp);
	$req->bindParam(':nom',$nom);
	$req->bindParam(':prenom',$prenom);
	$req->bindParam(':email',$email);
	$req->bindParam(':sexe',$sexe);
	$req->bindParam(':ville',$ville);
	$req->bindParam(':cp',$cp);
	$req->bindParam(':adresse',$adresse);
	return $req->execute();

}
function verif_pseudo($pseudo)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
	$req->bindParam(':pseudo',$pseudo);
	$req->execute();
	return $req->fetch();

}
function verif_mail($email)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM membre WHERE email = :email");
	$req->execute();
	return $req->fetch();

}


function modif_compte_dbb($mdp,$email,$ville,$cp,$adresse,$id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("REPLACE TO membre set mdp = :mdp,email = :email,ville = :ville,cp = :cp,adresse = :adresse WHERE id =:id");
	$req->bindParam(':mdp',$mdp);
	$req->bindParam(':email',$email);
	$req->bindParam(':ville',$ville);
	$req->bindParam(':cp',$cp);
	$req->bindParam(':adresse',$adresse);
	  $req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();

}

function panierModele($id)
{

	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT p.id_produit,s.titre,s.photo,s.ville,s.capacite,p.date_arrivee,p.date_depart,p.prix FROM salle s, produit p  where id_produit = $_POST[id_produit] AND s.id_salle = p.id_salle");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetch();



/*SELECT p.id_produit,s.titre,s.photo,s.ville,s.capacite,p.date_arrivee,p.date_depart,p.prix FROM salle s, produit p where id_salle = $_POST[id_salle]
SELECT p.id_produit,s.titre,s.photo,s.ville,s.capacite,p.date_arrivee,p.date_depart,p.prix FROM salle s, produit p where id_produit = 1*/

}
/*--------------------------------------news letter---------------------------------------------------------*/

function ajouterNewsLetterModel($id_membre)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("INSERT INTO newsletter SET  id_membre = :id_membre   ");
	$req->bindParam(':id_membre',$id_membre);
	return $req->execute();

}

function VerifNewsLetterModel($id_membre)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM newsletter  WHERE id_membre =:id_membre  ");
	$req->bindParam(':id_membre',$id_membre);
	 $req->execute();
	 return $req->fetch();

}























