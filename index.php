<?php

include_once("model/session.php");

$brb_target=!isLogged() ?'inscription.php':'nouvel_echange.php';
$brb_title=!isLogged() ?'INSCRIPTION':'NOUVELECHANGE';
$brb_sub=!isLogged()?'Inscrivez vous de manière payante':'Préparez vous à échanger';

$name_page='Accueil';
include_once("view/index.php");