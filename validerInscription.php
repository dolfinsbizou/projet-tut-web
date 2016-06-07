<?php
include_once("model/session.php");
include_once("model/requete.php");


if (empty($_POST['login']) or (empty($_POST['mdp'])) or (empty($_POST['mdp_conf'])) or(empty($_POST['email'])))
{
	header('Location: inscription.php?err=1');
}