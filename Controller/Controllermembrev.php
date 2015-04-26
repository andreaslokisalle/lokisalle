<?php
function membre()
    {
    	 if(!isset($_SESSION['membre']))
    	{
    		
       
            return false;
    	}
    	else
    	{
    		return true;
    	}

    }
function membreAdmin()
    {
    	 if(membre() && $_SESSION['membre']['statut'] ==1 )
    	{
    		return  true;
    	}
    
    	
    		return false;
   

    }
function membreNavigationAdmin()
    {
            if(!membreAdmin())
        {
            header('location:index.php?page=membre&&action=connexion');
            exit();
        }

    }