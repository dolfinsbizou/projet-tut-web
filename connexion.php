<?php
include_once("model/session.php");

if (isLogged())
{
	Header("Location: ./");
}
else
{
		if (isset($GET['err']))
		{
			$err = "<div id =\"err\" class=\"icon\">";
			switch($_GET['err'])
			{
				case 1:
					$err.= "Pseudo inexistant";

					break;
				case 2:
					$err.= "Mauvais mot de passe";

					break;
				default:
					$err.= "Ca c'est l'url, ne le touche pas";

			}

			$err.="</div>";
		}
		else
				$err='';
		$page_title="Connexion";
		include_once("view/connexion.php");
}