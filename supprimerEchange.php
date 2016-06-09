<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/trades.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

deleteTrade($_GET['id']);

header('Location: echanges.php');
