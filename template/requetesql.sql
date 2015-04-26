
pour la page d acceuil

SELECT s.photo, s.capacite, p.date_arrivee,p.date_depart,p.prix from salle s left join produit p on s.id_salle = p.id_salle limit 0,3

page article detail
SELECT s.photo, s.capacite, p.date_arrivee,p.date_depart,p.prix,a.commentaire,a.note
 selection sql pour ajouter un produit
SELECT p.id_produit,p.id_salle,p.prix,s.pays,s.ville,s.titre,s.capacite,s.id_salle FROM salle s left join produit p on p.id_salle = s.id_salle where p.id_salle = s.id_salle

sql pour voir tous les produit page membre
SELECT s.titre, s.description,s.categorie,s.photo, s.capacite, s.adresse,s.cp,s.pays, s.ville, p.date_arrivee,p.date_depart,p.prix from salle s left join produit p on s.id_salle = p.id_salle
 
selectioner un membre avec une salle commentaire

SELECT m.pseudo, a.commentaire, a.note,a.date FROM avis a left join membre m on a.id_membre = m.id_membre WHERE id_salle = id_salle

gestion des avis 

SELECT s.titre, s.pays,s.ville,s.id_salle, a.commentaire,a.note,m.pseudo,m.email FROM salle s left join avis a on s.id_salle = a.id_salle left join membre m on m.id_membre = a.id_membre 

gestion des commandes

SELECT c.id_commande, SUM(c.montant), m.pseudo FROM commande c left join membre m on c.id_membre = m.id_membre where c.id_membre = m.id_membre

page datail pour salle

SELECT s.titre, s.description, s.capacite, s.categorie,s.photo, s.titre, s.pays,s.ville,s.adresse,s.cp,p.date_arrivee,p.date_depart,p.prix,a.commentaire,a.note,a.date,m.pseudo
FROM salle s left join produit p on s.id_salle = p.id_salle
left join avis a on a.id_salle = s.id_salle
left join membre m on m.id_membre = a.id_membre



