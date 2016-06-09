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
	$t["comment"] = nl2br(htmlspecialchars($t["comment"]));
} //flemme de sécuriser le reste

foreach($avalaibleTrades as &$et)
{
	$et["comment"] = nl2br(htmlspecialchars($et["comment"]));
} //flemme de sécuriser le reste

$page_title = 'Liste des échanges';
include_once("view/echanges.php");
