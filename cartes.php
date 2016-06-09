<?php
include_once("model/sessions.php");
include_once("model/cards.php");
include_once("model/library.php");

$lib = false;
$data = null;

if(isset($_GET['id']))
{
	if(($data = getUserInfoById($_GET['id'])) == null)
	{
		Header('Location: /');
		exit;
	}
	else
		$cartes = getUserLibrary($_GET['id']);
	
	$lib = true;
}
else
	$cartes = getCards();

if(!empty($cartes))
{
	foreach($cartes as &$carte)
	{
		$carte['name'] = htmlspecialchars($carte['name']);
		$carte['color'] = htmlspecialchars($carte['color']);
	}
}

if($data != null)
{
	$data['pseudo'] = htmlspecialchars($data['pseudo']);
}

$self = getUserId() == $data['id'];

$page_title = 'Liste des cartes';
include_once("view/cartes.php");
