<?php

include_once'./Model/connexionModel.php';
include_once'Controller.php';
include_once'Controllermembrev.php';


function connexionMembre()
{
$msg='';
	if(membre())
	{
		header('location:index.php?page=membre&&action=profile');
		exit();
	}
	if(membreAdmin())
	{
		header('location:index.php?page=membre&&action=profile');
		exit();
	}
	if(isset($_POST['connexion']))
		{
		
		try
		{
			$membre = connexion_Verification($_POST['mdp'],$_POST['pseudo']);
			if(!$membre)
			{
				$msg .="<div class='danger'>mots de passe ou pseudo invalide</div>";
			}
			else
			{
				$_SESSION['membre'] = $membre; 
				header('location:index.php?page=membre&&action=profile');
			}
		}
		catch (PDOExeception $e)
		{
			print " Erreur !:".$e->message()."<br/>";
			die();
		}
		
	}
	membre();
	membreAdmin();
	//var_dump($_SESSION['membre']);
	$var = array("msg"=>$msg);
	/*var_dump($var);*/
 return render ('./views/connexion/connexion.php',$var);
}

function deconnexioncontoller()
{
	session_destroy();
	header('location:index.php?page=membre&&action=connexion');
	exit();
	return render('./views/connexion/connexion.php');
}
function mdpperduController()
{

	return render('./views/connexion/mdpperdu.php');
}


