<?php
	$sgbdr ='mysql';
	$dbHost='localhost';
	$dbBase='projettut';
	$dbUser='root';
	$dbPassword='';


	try
	{
		$database = new PDO ($sgbdr . ':host=' . $dbHost . ';dbname=' . $dbBase . ';charset=utf8', $dbUser, $dbPassword);
	}
	catch(Exception $fail)
	{
		die($fail->getMessage());
	}
?>