<?php
include_once("model/sessions.php");
include_once("model/cards.php");
include_once("model/trades.php");

if(!isLogged())
{
	header('location: /');
	exit;
}

$selfTrades = getUserTrades(getUserId());
$avalaibleTrades = getAvalaibleTrades(getUserId());

foreach($selfTrades as &$t)
{
	$t["comment"] = (htmlspecialchars($t["comment"]));
} //flemme de sécuriser le reste

foreach($selfTrades as &$et)
{
	$et["comment"] = (htmlspecialchars($et["comment"]));
} //flemme de sécuriser le reste

$page_title = 'Liste des échanges';
include_once("view/echanges.php");
