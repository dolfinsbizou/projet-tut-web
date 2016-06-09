<?php

include_once($PROJECT_ROOT . 'model/connectBDD.php');
include_once($PROJECT_ROOT . 'model/sessions.php');

function getCards($alphaMode=false)
{
	global $bdd;

	$req = $bdd->query('SELECT * FROM cards ORDER BY ' . ((!$alphaMode)?'color,':'') . 'name');
	return $req->fetchAll();
}
