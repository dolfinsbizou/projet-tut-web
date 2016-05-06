<html lang = "fr">
	<?php include_once("include/head.php"); ?>
	<body>
			<h1>Connexion</h1>
			<form method="POST" action ="validerConnexion.php">
				Pseudo :
				<input type="text" name="Pseudo">
			</br>
				Mot de passe : 
				<input type="password" name"mdp">
			</br>
				<input type="submit" value ="Connexion">
			</form>
			<a href = "inscription.php"> Inscrivez-vous </a>
			<?php include_once("include/footer.php") ?>
	</body>
</html>