<?php
include_once("model/session.php");
include_once("model/requete.php");

if ((!isset($_POST['pseudo']) or ((!isExistingUser($_POST['pseudo'])))))
	{header('Location: connexion.php?err=1');}
else
{
	$user = recupDataByLogin($_POST['pseudo']);

}