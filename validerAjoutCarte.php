<?php
include_once("model/sessions.php");
include_once("model/users.php");
include_once("model/library.php");

if(!isLogged())
{
	Header('Location: /');
	exit;
}

addCardToLibrary(getUserId(), $_POST['card']);

header('Location: cartes.php?id=' . getUserId());
