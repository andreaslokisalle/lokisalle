<?php session_start();creationDupanier();
$msgerror ='';

function render($fichierVue,$var = null)
{
  ob_start();
    if (is_array($var))
    {
        extract($var);
    }
  include $fichierVue;
$contents=ob_get_contents();
ob_clean();
include'./views/layout.php';

}

function VerifExtensionPhoto()
{

    $tab_extension_valide = array('gif', 'jpg', 'jpeg', 'png'); 
    $verif_extension = $tab_extension_valide; 
    
    return $verif_extension;
}
function creationDupanier()
{
    if(!isset($_SESSION['panier']))
    {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['id_produit'] = array();
        $_SESSION['panier']['titre'] = array();
        $_SESSION['panier']['capacite'] = array();

       // $_SESSION['panier']['photo'] = array();
        $_SESSION['panier']['date_arrivee'] = array();
        $_SESSION['panier']['date_depart'] = array();
        $_SESSION['panier']['ville'] = array();
        $_SESSION['panier']['prix'] = array();
    }
   return true;
}
function ajouterUnarticleaupanier($id_produit,$titre/*$photo*/,$capacite,$date_arrivee,$date_depart,$prix,$ville)
{
   // echo $_SESSION['panier']['id_produit'];
   // var_dump($_SESSION['panier']);
   $position_article = array_search($id_produit, $_SESSION['panier']['id_produit']);

 if($position_article !== FALSE) // si l'article a été trouvé
    {
        $_SESSION['panier']['id_produit'][$position_article] = $id_produit; // on modifie juste la quantité de l'article qui se trouve déjà dans le panier
    }
   else
      {  $_SESSION['panier']['id_produit'][]  = $id_produit;
              $_SESSION['panier']['titre'] [] = $titre;
              $_SESSION['panier']['capacite'] = $capacite;
              //$_SESSION['panier']['photo'] = $photo;
              $_SESSION['panier']['date_arrivee'][]  = $date_arrivee;
              $_SESSION['panier']['date_depart'][]  = $date_depart;
              $_SESSION['panier']['ville'][]  = $ville;
              $_SESSION['panier']['prix'][]  = $prix;
        }
       
    
}
/* function retireArticleduPanier($id_produit_a_supprimer)
 {
      $position_article = array_search($id_produit_a_supprimer, $_SESSION['panier']['id_produit']);
      if($position_article !== false)
     {
        array_splice($_SESSION['panier']['id_produit'], $position_article, 1);
         array_splice($_SESSION['panier']['titre'] , $position_article, 1);
        array_splice($_SESSION['panier']['photo'], $position_article, 1);
         array_splice($_SESSION['panier']['capacite'], $position_article, 1);
        array_splice($_SESSION['panier']['date_arrivee'], $position_article, 1);
         array_splice($_SESSION['panier']['date_depart'] , $position_article, 1);
         array_splice($_SESSION['panier']['prix'], $position_article, 1);
       

     }

 }*/