<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/trades.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

betOnTrade($_GET['id'], $_POST['card'], getUserId(), $_POST['comment']);

header('Location: echanges.php');
