<?php
include_once("model/session.php");
include_once("model/requete.php");
echo("test");
if (!isset($POST['pseudo']) or (!recupDataByLogin($_POST['pseudo'])))
	{header('Location: connexion.php?err=1');}
else
{
	
}