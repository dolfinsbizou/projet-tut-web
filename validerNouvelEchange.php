<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/trades.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

addTrade(getUserId(), $_POST['card'], $_POST['comment']);

header('Location: profil.php?id=' . getUserId());
