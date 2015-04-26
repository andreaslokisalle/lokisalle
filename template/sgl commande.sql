SELECT c.id_commande,c.montant, c.id_membre,c.date,m.pseudo,d.id_produit,s.id_salle,s.ville FROM commande c left join membre m on c.id_membre = m.id_membre
left join detail_commande d on c.id_commande = d.id_commande left join proudit p on d.id_produit = p.id_produit where id_membre = 1

SELECT c.id_commande,c.montant, c.id_membre,c.date,m.pseudo,d.id_produit FROM commande c left join membre m on c.id_membre = m.id_membre
left join details_commande d on c.id_commande = d.id_commande left join produit p on d.id_produit = p.id_produit where id_membre = 1