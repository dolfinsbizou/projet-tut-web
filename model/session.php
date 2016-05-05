<?php
	


	function Log ($id, $login, $mdp, $email, $Admin)
	{
		session_start();
		$_SESSION['idusers'] = $id;
		$_SESSION['login'] = $login;
		$_SESSION['mdp'] = $mdp;
		$_SESSION['email'] = $email;
		$_SESSION['Admin']	= $Admin;
	}



	function isLogged()
	{
		if ((empty($_SESSION['idusers'])) or (empty($_SESSION['login'])) or (empty($_SESSION['mdp'])) or (empty($_SESSION['email'])) or (empty($_SESSION['Admin'])))
		{
			return false;
		}
		else
		{
			return true;
		}
	}


	function Deco()
	{
		unset($_SESSION);
	}
?>