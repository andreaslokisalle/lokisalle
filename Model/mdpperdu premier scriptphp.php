<?php
if(isset($_POST['mdpperdu']))
{
	/*recherche mdp*/ ("SELECT email FROM membre WHERE email = $_POST[mail]")->ma variable()
	if($_POST['mdpperdu'] == $mavarriable)
	{
		mail to + delete mdp
	}
}