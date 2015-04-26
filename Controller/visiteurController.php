<?php
include'Controllermembrev.php';
include_once'./Model/visiteur_modele.php';

include'Controller.php';



function acceuilController()
{
  $produitaccueil = acceuilResaProduit();
  //var_dump( $produitaccueil);
  $var = array("produitaccueil"=> $produitaccueil);
    //var_dump( $var);
return render('./views/visiteur/acceuil.php',$var);
}

function rechercheController()
{
  return render('./views/visiteur/recherche.php');
}
function reservationController()
{
  $produitaccueil = acceuilResaProduit();
  //var_dump( $produitaccueil);
  $var = array("produitaccueil"=> $produitaccueil);
    //var_dump( $var);




  return render('./views/visiteur/reservation.php',$var);
}
function detailSalleController()
{
  if(isset($_GET['id']))
  {
    $detailSalleModel = detailSalleModel();
   $avisdetailSalleModel = avisdetailSalleModel();
 $produitdetailSalleModel =  produitdetailSalleModel();
    $var =array('detailSalleModel'=>$detailSalleModel,
                  'avisdetailSalleModel'=>$avisdetailSalleModel,
                  'produitdetailSalleModel'=>$produitdetailSalleModel);
  
    return render('./views/visiteur/detail_salle.php',$var);
  }
  
}
function enregistreavisController()/*demander a peter*/
{
   // var_dump($_POST);
  
 membre();
   
  //$verif="";

      if(isset($_POST['enregistreavis']))
      {
          var_dump($_POST);
        /*if(strlen($_POST['commentaire'])<5 || strlen($_POST['commentaire'])>255 )
        {
          $msg .=  '<div class="danger">vous pouvez mettre entre 5 et 255 caratere</div>';
           
        }*/
    
         /* if(empty($msg))
        { */ 
            ajouterUnCommentaireModel($_POST['commentaire'],$_POST['note'],$_SESSION['membre']['id_membre'],$_POST['id_salle']);
           /* header('location:./index.php?page=membre&&action=detail_salle');
            */

         /* }*/
      //include './views/visiteur/detail_salle.php';

      }

}
function PlanDuSiteController()
{



return render('./views/visiteur/plandusite.php');
}
function ConditionGeneraleController()
{


	return render('./views/visiteur/conditiong.php');
}
function mentionLegalController()
{

		return render('./views/visiteur/mentionl.php');
}
function contactController()
{ $msg='';

  
  if(isset($_POST['envoyee']))
  {
    if(strlen($_POST['sujet']<5 || $_POST['sujet']>30 ))
    {
      $msg .=  '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
    }
    if(strlen($_POST['sujet']<5 || $_POST['sujet']>255 ))
    {
      $msg .=  '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
    }
    if(empty($msg))
      {
        echo $_SESSION['membre']['email'] . '<br>';
        echo $_POST['expediteur'] . '<br>';
        echo $_POST['sujet'] . '<br>';
        echo $_POST['texte'] . '<br>';
        echo '<hr>';
        
        $_POST['expediteur'] = 'From: ' .$_POST['expediteur'];
        
         mail($_SESSION['membre']['email'], $_POST['sujet'], $_POST['texte'], $_POST['webmaster@myspacebook.fr'] ); // nbe d'arguments et ordre sont très important

      }
      else
      {
           $msg .=  '<div class="danger">dsl pb message pas envoyé.</div>';


      }

  }elseif(isset($_POST['envoyee']))
  {
    if(isset($_POST['email']))
    {
      $msg .=  '<div class="danger">Merci de mettre votre mail</div>';
    }
    if(strlen($_POST['sujet']<5 || $_POST['sujet']>30 ))
    {
      $msg .=  '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
    }
    if(strlen($_POST['sujet']<5 || $_POST['sujet']>255 ))
    {
      $msg .=  '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
    }
    if(empty($msg))
      {
        echo $_POST['email'] . '<br>';
         echo $_POST['expediteur'] . '<br>';
        echo $_POST['sujet'] . '<br>';
        echo $_POST['texte'] . '<br>';
        echo '<hr>';
        
        $_POST['expediteur'] = 'From: ' .$_POST['expediteur'];
        
         mail($_POST['email'], $_POST['sujet'], $_POST['texte'], $_POST['webmaster@myspacebook.fr'] ); // nbe d'arguments et ordre sont très important

      }
      else
      {
           $msg .=  '<div class="danger">dsl pb message pas envoyé.</div>';


      }

  }

		return render('./views/visiteur/contact.php');
}


















