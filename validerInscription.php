<?php
include_once("model/session.php");
include_once("model/requete.php");


if (empty($_POST['login']) or (empty($_POST['mdp'])) or (empty($_POST['mdp_conf'])) or(empty($_POST['email'])))
{
	header('Location: inscription.php?err=1');
}
else 
{
	if(($_POST['mdp']) != ($_POST['mdp_conf']))
	{
		header('Location: inscription.php?err=2');
	}
	else
	{
		if(!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
		{
			header('Location: inscription.php?err=3');
		}
		else
		{
			inserUsers($_POST['login'], $_POST['mdp'], $_POST['email']);
		}
	}
}