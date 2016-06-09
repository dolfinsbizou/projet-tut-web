<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/library.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

deleteCardFromLibrary(getUserId(), $_GET['id']);

header('Location: cartes.php?id=' . getUserId());
