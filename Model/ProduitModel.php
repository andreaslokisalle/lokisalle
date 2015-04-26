<?php
include_once 'Model.php';
/*-------------------------------------------salle--------------------------------------------------*/
function verif_ref($reference)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM salle WHERE reference = '$_POST[reference]'");
	return $req->execute();
	

}
function enregistrementsalle($id_salle,$pays,$ville,$adresse,$cp,$titre,$description,$capacite,$categorie,$reference,$photo)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("INSERT INTO salle set id_salle = :id_salle,pays = :pays,ville = :ville, photo = :photo ,adresse = :adresse,cp = :cp,titre = :titre,description = :description,capacite = :capacite,categorie = :categorie, reference = :reference");
	$req->bindParam(':id_salle',$id_salle);
	$req->bindParam(':photo',$photo);
	$req->bindParam(':pays',$pays);
	$req->bindParam(':ville',$ville);
	$req->bindParam(':adresse',$adresse);
	$req->bindParam(':cp',$cp);
	$req->bindParam(':titre',$titre);
	$req->bindParam(':description',$description);
	$req->bindParam(':capacite',$capacite);
	$req->bindParam(':categorie',$categorie);
	$req->bindParam(':reference',$reference);
	return $req->execute();

}

function tousLesSalles()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM salle ");
	$req->execute();
	return $req->fetchAll();

}
function supprimeruneSalle($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("DELETE FROM SALLE WHERE id_salle = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();
}
function modifSalleModel($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM SALLE WHERE id_salle = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchall();
}
function Modifsalleenregistrement($id_salle,$pays,$ville,$adresse,$cp,$titre,$description,$capacite,$categorie,$reference)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("REPLACE TO salle set id_salle = :id_salle,pays = :pays,ville = :ville,adresse = :adresse,cp = :cp,titre = :titre,description = :description,capacite = :capacite,categorie = :categorie, reference = :reference WHERE id = :id");
	$req->bindParam(':id_salle',$id_salle);
	$req->bindParam(':pays',$pays);
	$req->bindParam(':ville',$ville);
	$req->bindParam(':adresse',$adresse);
	$req->bindParam(':cp',$cp);
	$req->bindParam(':titre',$titre);
	$req->bindParam(':description',$description);
	$req->bindParam(':capacite',$capacite);
	$req->bindParam(':categorie',$categorie);
	$req->bindParam(':reference',$reference);
	return $req->execute();

}
function tousLesSallesmodif($id_salle)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM salle WHERE id_salle =$_GET[id_salle] ");
	$req->execute();
	return $req->fetchAll();

}
/*-------------------------------------------------promotion----------------------------------------------*/
function ajouterCodePromoModel($code_promo,$reduction)
{
		$dbh = getBdConnexion();
		$req = $dbh->prepare("INSERT INTO promotion set code_promo = :code_promo, reduction = :reduction");
		$req -> bindParam(':code_promo',$code_promo);
		$req -> bindParam(':reduction',$reduction);
		return 	$req ->execute();
}
function tousLescodepromo()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM promotion");
	$req->execute();
	return $req->fetchAll();
}
function supp_promoModel($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("DELETE FROM promotion WHERE id_promo = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();

}

function modifpromoModel($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM promotion WHERE id_promo = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchall();
}
function ajoutermodifpromoModel($id,$code_promo,$reduction)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("REPLACE TO promotion WHERE id_promo = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req -> bindParam(':code_promo',$code_promo);
	$req -> bindParam(':reduction',$reduction);
	return $req->execute();
	
}
/*---------------------------------------------membre-------------------------------------------*/
function ajouter_Membre_admin($pseudo,$mdp,$nom,$prenom,$email,$sexe,$ville,$cp,$adresse,$statut)/* sexe requet*/
{ 
	$dbh = getBdConnexion();
	$req = $dbh->prepare("INSERT INTO membre set pseudo = :pseudo,mdp = :mdp,nom = :nom,prenom = :prenom,email = :email,sexe = :sexe,ville = :ville,cp = :cp,adresse = :adresse,statut = :statut");
	$req->bindParam(':pseudo',$pseudo);
	$req->bindParam(':mdp',$mdp);
	$req->bindParam(':nom',$nom);
	$req->bindParam(':prenom',$prenom);
	$req->bindParam(':email',$email);
	$req->bindParam(':sexe',$sexe);
	$req->bindParam(':ville',$ville);
	$req->bindParam(':cp',$cp);
	$req->bindParam(':adresse',$adresse);
	$req->bindParam(':statut',$statut);
	return $req->execute();

}
function afficherMembre()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM membre");
 $req->execute();
 return $req->fetchAll();

}
function supprimerunMembre($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("DELETE FROM membre WHERE id_membre = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();
}
/*-----------------------------------------------produit--------------------------------------------*/

function codepromoPourProduit()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare('SELECT * FROM promotion');
	$req->execute();
	return $req->fetchAll();
}
function salleselectionajoutProduit()/*table salle*/
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT id_salle, pays, ville, adresse,cp,titre,capacite,categorie FROM salle");
	$req->execute();
	return $req->fetchAll();
}
function ajouterUnProduit($id_salle,$id_promo,$date_arrivee,$date_depart,$prix,$etat)
{
	$dbh = getBdConnexion();
	$req= $dbh->prepare("INSERT INTO produit set id_salle = :id_salle,id_promo = :id_promo, date_arrivee= :date_arrivee, date_depart=:date_depart, prix =:prix,etat =:etat");
	$req->bindParam(':id_salle',$id_salle);
	$req->bindParam(':id_promo',$id_promo);
	$req->bindParam(':date_arrivee',$date_arrivee);
	$req->bindParam(':date_depart',$date_depart);
	$req->bindParam(':prix',$prix);
	$req->bindParam(':etat',$etat);
	return $req->execute();
}
function SelectionProduitmodel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit WHERE etat = 'NULL'");
	$req->execute();
	return $req->fetchAll();
}
function SelectionProduitmodeldaasc()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit WHERE etat = 'NULL' ORDER BY date_arrivee ASC ");
	$req->execute();
	return $req->fetchAll();
}
function SelectionProduitmodelddasc()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit  WHERE etat = 'NULL' ORDER BY date_arrivee DESC ");
	$req->execute();
	return $req->fetchAll();
}
function SelectionProduitmodelmontantdasc()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit  WHERE etat = 'NULL' ORDER BY date_arrivee ASC ");
	$req->execute();
	return $req->fetchAll();
}
function SelectionProduitmodelmontantDESC()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit WHERE etat = 'NULL' ORDER BY date_arrivee DESC ");
	$req->execute();
	return $req->fetchAll();
}
function supprimerunproduit($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("DELETE FROM produit WHERE id_produit = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();
}
function Modifunproduit($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT * FROM produit WHERE id_produit = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchall();
}
function ModifsProduit($id_salle,$id_promo,$date_arrivee,$date_depart,$prix,$id_produit)
{
	$dbh = getBdConnexion();
	$req= $dbh->prepare("REPLACE TO  produit set id_produit = :id_produit,id_salle = :id_salle,id_promo = :id_promo, date_arrivee= :date_arrivee, date_depart=:date_depart, prix =:prix");
	$req->bindParam(':id_salle',$id_salle);
	$req->bindParam(':id_promo',$id_promo);
	$req->bindParam(':date_arrivee',$date_arrivee);
	$req->bindParam(':date_depart',$date_depart);
	$req->bindParam(':prix',$prix);
	$req->bindParam(':id_produit',$id_produit);
	return $req->execute();
}
/*-------------------------------------------------avis-----------------------------------*/
function avisModel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare(" SELECT a.id_avis,a.commentaire, a.note,a.id_salle,s.titre,a.date,m.pseudo FROM avis a left join salle s on a.id_salle = s.id_salle left join membre m on a.id_membre = m.id_membre");
	$req->execute();
	return $req->fetchall();
}
function supprimerunavis($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("DELETE FROM avis WHERE id_avis = $_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	return $req->execute();
}



/*------------------------------------------commande---------------------------------------------*/
 
function CommandeModel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare(" SELECT id_commande,montant,id_membre FROM commande ");
	$req->execute();
	return $req->fetchall();
} 

function ChiffreaffaireCommandeModel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT sum(montant)from commande ");
	$req->execute();
	return $req->fetchall();
} 

function CommandeMMModel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare(" SELECT id_commande,montant,id_membre FROM commande ORDER BY montant ASC");
	$req->execute();
	return $req->fetchall();
} 
function CommandeDDModel()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare(" SELECT id_commande,montant,id_membre FROM commande ORDER BY montant DESC");
	$req->execute();
	return $req->fetchall();
} 
function DetailCommande($id)
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT c.id_commande,c.montant,c.date,c.id_membre,m.pseudo,p.id_produit,s.id_salle,s.ville FROM commande c, details_commande  d, produit p ,membre m, salle s WHERE  c.id_membre = $_GET[id] AND c.id_commande = d.id_commande  AND    d.id_produit=p.id_produit AND p.id_salle=s.id_salle");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchall();
}









