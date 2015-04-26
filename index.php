<?php

include 'config/routes.php';


if(isset($_GET['page']))
{
	if(isset($routes[$_GET['page']]))
	{

			if(isset($_GET['action']))
			{

					if(isset($routes[$_GET['page']] [$_GET['action']]))
					{
						include'Controller/'.$routes[$_GET['page']][$_GET['action']]['controller'].'.php';
						  $action = $routes[$_GET['page']][$_GET['action']]['action'];
                		$action();
					}else
						{
							include_once'views/error/error.php';
						}

			}else
				{
					include_once'views/error/error.php';
				}
	}else
		{
			include_once'views/error/error.php';
		}
	

}
else
	{
header('Location:index.php?page=membre&&action=acceuil');  	}