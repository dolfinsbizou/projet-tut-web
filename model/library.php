<?php

include_once($PROJECT_ROOT . 'model/connectBDD.php');
include_once($PROJECT_ROOT . 'model/sessions.php');

function getUserLibrary($id, $alphaMode=false)
{
	global $bdd;

	$req = $bdd->prepare('SELECT cards.id, cards.name, cards.color, library.id AS \'idLib\' FROM library INNER JOIN cards ON library.idCard = cards.id WHERE library.idUser = ? ORDER BY ' . ((!$alphaMode)?'color,':'') . 'name');
	$req->execute(array($id));

	return $req->fetchAll();
}

function addCardToLibrary($idUser, $idCard)
{
	global $bdd;

	$req = $bdd->prepare('INSERT INTO library(idUser, idCard) VALUES (:us, :ca)');
	$req->execute(array(
				'us' => $idUser,
				'ca' => $idCard));
}

function deleteCardFromLibrary($idUser, $id)
{
	global $bdd;

	$req = $bdd->prepare('DELETE FROM library WHERE idUser = :us AND id = :id');
	$req->execute(array(
				'us' => $idUser,
				'id' => $id));
}
