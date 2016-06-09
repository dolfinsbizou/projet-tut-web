<?php

include_once($PROJECT_ROOT . 'model/connectBDD.php');
include_once($PROJECT_ROOT . 'model/sessions.php');

function addTrade($uid, $cid, $c)
{
	global $bdd;

	$req = $bdd->prepare('INSERT INTO trades(idSellingUser, idSellingCard, comment) VALUES(?, ?, ?)');

	$req->execute(array($uid, $cid, $c));
}

function getUserTrades($uid)
{
	global $bdd;
	 
	$req = $bdd->prepare("SELECT ls.id AS 'idLS',
								 cs.id AS 'idCS',
								 cs.name AS 'nameCS',
								 cs.color AS 'colorCS',
								 lb.id AS 'idLB',
								 cb.id AS 'idCB',
								 cb.name AS 'nameCB',
								 cb.color AS 'colorCB',
								 us.id AS 'idUS',
								 us.pseudo AS 'pseudoUS',
								 us.admin AS 'adminUS',
								 ub.id AS 'idUB',
								 ub.pseudo AS 'pseudoUB',
								 ub.admin AS 'adminUB',
								 trades.comment,
								 trades.status,
								 trades.id
						  FROM trades INNER JOIN library AS ls
							ON trades.idSellingCard = ls.id
						  INNER JOIN cards AS cs
							ON ls.idCard = cs.id
						  LEFT JOIN library AS lb
							ON trades.idBuyingCard = lb.id
						  LEFT JOIN cards AS cb
							ON lb.idCard = cb.id
						  INNER JOIN users AS us
							ON trades.idSellingUser = us.id
						  LEFT JOIN users AS ub
							ON trades.idBuyingUser = ub.id
						  WHERE trades.idSellingUser = ?");

	$req->execute(array($uid));

	return $req->fetchAll();
}

function getAvalaibleTrades($uid)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT ls.id AS 'idLS',
								 cs.id AS 'idCS',
								 cs.name AS 'nameCS',
								 cs.color AS 'colorCS',
								 lb.id AS 'idLB',
								 cb.id AS 'idCB',
								 cb.name AS 'nameCB',
								 cb.color AS 'colorCB',
								 us.id AS 'idUS',
								 us.pseudo AS 'pseudoUS',
								 us.admin AS 'adminUS',
								 ub.id AS 'idUB',
								 ub.pseudo AS 'pseudoUB',
								 ub.admin AS 'adminUB',
								 trades.comment,
								 trades.status,
								 trades.id
						  FROM trades INNER JOIN library AS ls
							ON trades.idSellingCard = ls.id
						  INNER JOIN cards AS cs
							ON ls.idCard = cs.id
						  LEFT JOIN library AS lb
							ON trades.idBuyingCard = lb.id
						  LEFT JOIN cards AS cb
							ON lb.idCard = cb.id
						  INNER JOIN users AS us
							ON trades.idSellingUser = us.id
						  LEFT JOIN users AS ub
							ON trades.idBuyingUser = ub.id
						  WHERE trades.idSellingUser != ? AND trades.status = 0 AND trades.idBuyingUser IS NULL");

	$req->execute(array($uid));

	return $req->fetchAll();
}

function deleteTrade($id)
{
	global $bdd;

	$req = $bdd->prepare('DELETE FROM trades WHERE id=?');
	$req->execute(array($id));
}

function getTrade($id)
{
	global $bdd;
	
	$req = $bdd->prepare("SELECT ls.id AS 'idLS',
								 cs.id AS 'idCS',
								 cs.name AS 'nameCS',
								 cs.color AS 'colorCS',
								 lb.id AS 'idLB',
								 cb.id AS 'idCB',
								 cb.name AS 'nameCB',
								 cb.color AS 'colorCB',
								 us.id AS 'idUS',
								 us.pseudo AS 'pseudoUS',
								 us.admin AS 'adminUS',
								 ub.id AS 'idUB',
								 ub.pseudo AS 'pseudoUB',
								 ub.admin AS 'adminUB',
								 trades.comment,
								 trades.status,
								 trades.id
						  FROM trades INNER JOIN library AS ls
							ON trades.idSellingCard = ls.id
						  INNER JOIN cards AS cs
							ON ls.idCard = cs.id
						  LEFT JOIN library AS lb
							ON trades.idBuyingCard = lb.id
						  LEFT JOIN cards AS cb
							ON lb.idCard = cb.id
						  INNER JOIN users AS us
							ON trades.idSellingUser = us.id
						  LEFT JOIN users AS ub
							ON trades.idBuyingUser = ub.id
						  WHERE trades.id = ?");

	$req->execute(array($id));

	return $req->fetch();

}

function concludeTrade($id, $dec)
{
	global $bdd;

	$req = $bdd->prepare('UPDATE trades SET status = ? WHERE id = ?');
	$req->execute(array($dec, $id));

	if($dec == 1)
	{
		$data = getTrade($id);

		$req2 = $bdd->prepare('UPDATE library SET idUser = ? WHERE id = ?');
		$req2->execute(array($data['idUB'], $data['idLS']));
		
		$req3 = $bdd->prepare('UPDATE library SET idUser = ? WHERE id = ?');
		$req3->execute(array($data['idUS'], $data['idLB']));
	}
}
