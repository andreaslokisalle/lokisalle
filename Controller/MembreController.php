<?php
include'Controller.php';
include_once'Controllermembrev.php';
include_once './Model/MembreModel.php';




function cree_Un_compte()
{
  $msg1='';
         
      if(isset($_POST['inscription']))
        { 
          
          
          $pseudo = verif_pseudo($_POST['pseudo']);
            if($pseudo == 0 )
            {
             $msg1 .='<div class="danger">dsl le speudo est deja prit</div>';
            }
            $email = verif_pseudo($_POST['email']);
            if($email == 0 )
            {
              $msg1 .='<div class="danger">dsl le mail est deja prit</div>';
            }
            
        

          if(strlen($_POST['pseudo'])< 5 ||strlen($_POST['pseudo']) >15 )
          {
           $msg1 .= '<div class="danger">invalid titre: min 5 à 15 max characters.</div>';
          }
          if(strlen($_POST['mdp'])< 5 ||strlen($_POST['mdp']) >32 )
          {
             $msg1 .=  '<div class="danger">invalid titre: min 5 à 32 max characters.</div>';
          }
          if(strlen($_POST['nom'])< 5 ||strlen($_POST['nom']) >20 )
          {
             $msg1 .=   '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
          }
          if(!$_POST['sexe'])
          {

              $msg1 .=  '<div class="danger">Merci de remplir ce champs.</div>'; 
          }
          if(!$_POST['email'])
          {

             $msg1 .=   '<div class="danger">Merci de remplir ce champs.</div>'; 
          }
          if(strlen($_POST['prenom'])< 5 ||strlen($_POST['prenom']) >20 )
          {
              $msg1 .=  '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
          }
          if(strlen($_POST['ville'])< 5 ||strlen($_POST['ville']) >20 )
          {
             $msg1.=   '<div class="danger">invalid titre: min 5 à 20 max characters.</div>';
          }
          if(strlen($_POST['cp']) == 5 )
          {
             $msg1 .=  '<div class="danger">le code postal doit avoir 5 characters.</div>';
          }
          if(strlen($_POST['adresse'])< 5 ||strlen($_POST['ville']) >30 )
          {
              $msg1 .=  '<div class="danger">invalid titre: min 5 à 30 max characters.</div>';
          }
          if(empty($msg))
              {
                
                cree_un_nouveau_compte_bdd($_POST['pseudo'],$_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['sexe'],$_POST['ville'],$_POST['cp'],$_POST['adresse']);
                  
              
                   header("location:index.php?page=membre&&action=connexion");
                    exit();
              }
          else
              {
                $msg1 .= 'insertion faild.';
              }

          }

/*$var = array("$msg1"=>$msg1);*/
 return render ('./views/visiteur/creeuncompte.php');

} 



/* --------------------MEMBRE ------------------------*/
function profileController()
{
   if(!membre())
    {
      header('location:index.php?page=membre&&action=connexion');
      exit();
    }
   /* var_dump($_SESSION);*/


return render('./views/membre/profile.php');

}
function modifier_profile_controller()
{
  /*var_dump($_POST);*/
   $verifmofif ='';
   $error ='';
  membre();
 /* modifier code et requete aucun indicatif sur l id*/
    if(isset($_GET['id']))
       { 
        if(isset($_POST['modifier']))
               {  echo'<pre>';
                    var_dump($_POST);
                  echo '</pre>';
               
                   if(strlen($_POST['mdp'])<5 || strlen($_POST['mdp'])<32 )
                   {
                     $verifmofif .=  '<div class="danger">vous pouvez mettre entre 5 et 32 caratere</div>';
                    echo 2;
                   }
                    if( strlen($_POST['email'])<5 || strlen($_POST['email'])<30 )
                   {
                      $verifmofif .= '<div class="danger">vous pouvez mettre entre 5 et 30 caratere</div>';
       
                   }
                    if(strlen($_POST['ville'])<5 || strlen($_POST['ville'])<20 )
                   {
                      $verifmofif .= '<div class="danger">vous pouvez mettre entre 5 et 20 caratere</div>';
       
                   }
                    if(strlen($_POST['cp'])== 5 )
                   {
                     $verifmofif .= '<div class="danger">vous pouvez mettre que 5 caratere</div>';
       
                   }
                    if(strlen($_POST['adresse'])<5 || strlen($_POST['adresse'])<30 )
                   {
                     $verifmofif.= '<div class="danger">vous pouvez mettre entre 5 et 30 caratere</div>';
       
                   }

                   if(empty($verifmofif))
                            {
                              modif_compte_dbb($_POST['mdp'],$_POST['email'],$_POST['ville'],$_POST['cp'],$_POST['adresse'], $_POST['id']);
                                 echo 3;
                
                                         header('location:./index.php?page=membre&&action=profile');
                                         exit;
                            } 
                            else{
                                        $error.= 'insertion faild.';
                                  }
                
            }
        }
    $var = array('verifmofif'=>$verifmofif,'error'=>$error);
return render('./views/membre/modifier_profile.php',$var);
}



function PanierController()
{
 membre();
 //var_dump($_POST);
if(isset($_POST['ajouter_panier']))
{  
  
     panierModele($_POST['id_produit']);
      $articlepanier = panierModele($_POST['id_produit']);
  ajouterUnArticleAuPanier($_POST['id_produit'], /*$articlepanier['photo'],*/ $articlepanier['titre'],$articlepanier['capacite'],$articlepanier['date_arrivee'],$articlepanier['date_depart'],$articlepanier['prix'],$articlepanier['ville']);
      $var =array('articlepanier'=>$articlepanier);
        //var_dump(ajouterUnArticleAuPanier());
    return render('./views/membre/panier.php',$var);
    
    


}

  return render('./views/membre/panier.php');

}
/*function vidermonPanier()
{
 var_dump($_POST);
    if(isset($_POST['action']) && $_POST['action'] == 'vider') 
      {
         
          unset($_SESSION['panier']);
         // header("location:index.php?page=membre&&action=panier");
          exit();
      }
}
*/
function newletterinscription()
{

      
      if(isset($_POST['validenewsletter']))
        {
            $verif =  VerifNewsLetterModel($_SESSION['membre']['id_membre']);

            if(!$verif)
            {
                 ajouterNewsLetterModel($_SESSION['membre']['id_membre']);

            }else
              {
                  $msg = '<div class="danger"> vous etes deja inscrit</div>';
               $var = array('msg' => $msg);
                 return render('./views/membre/newsletter.php',$var);
                  exit();

              }
             
             
        }
    
  



  return render('./views/membre/newsletter.php');
}





