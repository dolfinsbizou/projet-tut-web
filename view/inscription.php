<html lang = "fr">
	<?php include_once("include/head.php") ?>
	<body>
			<h1>Inscription</h1>
			<?php //include_once("include/header.php"); ?>
			<form method="POST" action ="validerInscription.php" >
				Login : <input type="text" name="login">
			</br>
				Mot de passe : <input type="password" name="mdp">
			</br>
				Confirmez le mot de passe : <input type="password" name="mdp_conf">
			</br>
				e-mail : <input type ="text" name="email">
			</br>
				<input type="submit" value="valider">
			</form>
			<?php include_once("include/footer.php"); ?>
	</body>
</html>