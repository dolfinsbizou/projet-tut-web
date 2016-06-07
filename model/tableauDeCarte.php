<?php
	include_once("model/requete.php");
	function afficheToutesLesCarte()
	{
		$ens = allCard();
		var_dump($ens);		
	}



	function afficheTousLesEchanges()
	{
		$echanges = getExchanges();
		foreach ($echanges as $ligne) 
		{
			echo("<tr>");
			echo("<td>");
			echo("$ligne['users.login']");
			echo("</td>");
			echo("<td>");
			//Pour la suite de l affichage il faut régler le problème de requete
			echo("</td>");
			echo("<td>");
			echo("$ligne['cartes.nomCarte']");
			echo("</td>");
			echo("</tr>");
		}

	}
?>