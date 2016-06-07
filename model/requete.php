<?php
	include_once("/model/connexionBDD.php");




	function recupIDUsers($login)
	{
		global $db;
		$req = $db->prepare('SELECT idusers FROM users WHERE (LOWER(login) = :login)' );
		$req->execute(array('login'=>strtolower($login)));

		$pseudo = $req->fetch(PDO::FETCH_COlUMN);
		return $pseudo;

	}



	function recupDataByLogin($login)
	{
		global $db;
		$req = $db ->prepare('SELECT * FROM users WHERE (login = :login)');
		$req->execute(array('email'=>strtolower($login)));

		$usersInfo = $req->fetch();

		return $usersInfo;

	}




	function recupUsersDataByID($id)
	{
		global $db;
		$req = $db ->prepare('SELECT * FROM users WHERE (idusers = :id)');
		$req->execute(array('id'=>($id)));

		$usersInfo = $req->fetch();

		return $usersInfo;
	}



	function inserUsers($login, $mdp, $email)
	{
		global $db;
		$req = $db->prepare('INSERT INTO users VALUES (NULL,:login,:mdp,:email,false)');
		$req->execute(array(('login') => $login, ('mdp') => $mdp, ('email')=>$email ));
	}

	function allCard ()
	{
		$req = $db ->prepare('SELECT * FROM cartes');
		$req->execute();
		$card = $req->fetch();

		return $card;
	}

	function isExistingUser($pseudo) 
	{ 
	 	global $db; 
	 	 
	 	$req = $db->prepare('SELECT login FROM users WHERE (LOWER(login) = :pseudo)'); 
	 	$req->execute(array('pseudo' => strtolower($pseudo))); 
	  
	 	$pseudos = $req->fetch(PDO::FETCH_COLUMN); 
	  
	 	return $pseudos?true:false; 
 	} 

	function getExchanges()
	{
		global $db;
		$req = $db->prepare('SELECT echanges.idDonneur, echanges.idDonne, echanges.idCarte, cartes.nomCarte, users.login FROM echanges, cartes, users WHERE (cartes.idCarte = echanges.idCarte);')
		//petit probleme avec la requete
		$req ->execute();
		$echanges = $req->fetch();
		return $echanges;
	}	

?>
