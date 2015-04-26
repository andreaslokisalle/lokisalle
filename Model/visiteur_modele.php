<?php
include_once 'Model.php';
function acceuilResaProduit()
{
	$dbh = getBdConnexion();
	$req = $dbh->prepare("SELECT s.id_salle,s.photo, s.capacite, s.titre,p.date_arrivee,p.date_depart,p.prix,p.id_produit FROM salle s left join produit p on s.id_salle = p.id_salle limit 0,3");
	$req->execute();
	return $req->fetchAll(PDO::FETCH_ASSOC);
}
function detailSalleModel()
{
	$dbh = $dbh = getBdConnexion();
	$req =$dbh->prepare("SELECT * FROM salle WHERE id_salle=$_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchAll();
}
function produitdetailSalleModel()
{
	$dbh = $dbh = getBdConnexion();
	$req =$dbh->prepare("SELECT * FROM produit WHERE id_salle=$_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchAll();
}
function avisdetailSalleModel()
{
	$dbh = $dbh = getBdConnexion();
	$req =$dbh->prepare("SELECT m.pseudo, a.commentaire, a.note,a.date FROM avis a left join membre m on a.id_membre = m.id_membre WHERE id_salle=$_GET[id]");
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
	return $req->fetchAll();
}
function ajouterUnCommentaireModel($commentaire,$note,$id_membre,$id_salle)
{
	
	$dbh = getBdConnexion();
	$req = $dbh->prepare  ("INSERT INTO avis set commentaire = :commentaire,note = :note,id_membre = :id_membre,id_salle = :id_salle, date = now() ");
	$req->bindParam(':commentaire',$commentaire);
	$req->bindParam(':note',$note);
	$req->bindParam(':id_membre',$id_membre);
	$req->bindParam(':id_salle',$id_salle);
	return $req->execute();


}