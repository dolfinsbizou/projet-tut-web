<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/cards.php");
include_once("model/library.php");
include_once("model/trades.php");

if(!isLogged())
	Header('Location: /');
else
{
	$cartes = getUserLibrary(getUserId(), true);
	$echange = getTrade($_GET['id']);
	$echange['pseudoUS'] = htmlspecialchars($echange['pseudoUS']);
	$echange['pseudoUB'] = htmlspecialchars($echange['pseudoUB']);
	$echange['comment'] = htmlspecialchars($echange['comment']);

	if(!empty($cartes))
	{
		$hasCards = true;
		foreach($cartes as &$carte)
		{
			$carte['name'] = htmlspecialchars($carte['name']);
			$carte['color'] = htmlspecialchars($carte['color']);
		}
	}
	else
		$hasCards = false;
	
	$page_title = 'Créer un échange';
	include_once("view/proposerEchange.php");
}
