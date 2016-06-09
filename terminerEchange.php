<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/trades.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

concludeTrade($_GET['id'], $_GET['dec']);

header('Location: echanges.php');
