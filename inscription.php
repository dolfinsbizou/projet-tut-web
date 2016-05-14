<?php
include_once("model/session.php");
if (isLogged())
	{header("Location./");}
else
{
		if(isset($_GET['err']))
		{
			$err = "<div id=\"err\" class=\"icon\">";
			switch($_GET['err'])
			{
				case 1:
					$err.="Tous les champs ne sont pas complétés";
					break;
				case 2:
					$err.="Les mots de passes sont différents";
					break;
				case 3:
					$err.="Ce n'est pas une adresse e-mail correcte";
					break;
				case 4:
					$err.="Les mots de passes sont différents";
					break;
			}
			$err.="</div>";
		}
		else
			{$err='';}
		$page_title="Inscription";
		include_once("view/inscription.php");
}