<?php
include_once("model/session.php");

if (!isLogged())
{
	Header('Location :/')
}
else
{
	include_once("tableauDeCarte.php");
}