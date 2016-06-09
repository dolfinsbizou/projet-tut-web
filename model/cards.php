<?php

include_once($PROJECT_ROOT . 'model/connectBDD.php');
include_once($PROJECT_ROOT . 'model/sessions.php');

function getCards()
{
	global $bdd;

	$req = $bdd->query('SELECT * FROM cards ORDER BY color, name');
	return $req->fetchAll();
}
