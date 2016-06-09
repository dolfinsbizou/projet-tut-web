<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/cards.php");

if(!isLogged())
	Header('Location: /');
else
{
	$cartes = getCards(true);
	
	if(!empty($cartes))
	{
		foreach($cartes as &$carte)
		{
			$carte['name'] = htmlspecialchars($carte['name']);
			$carte['color'] = htmlspecialchars($carte['color']);
		}
	}
	
	$page_title = 'Ajouter une carte';
	include_once("view/ajouterCarte.php");
}
