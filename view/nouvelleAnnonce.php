<html>
	<?php include_once ("include/head.php"); ?>
	<?php include_once ("connexionBDD.php"); ?>
	<?php include_once("requete.php");  ?>

	<?php $carte = searchCard(); ?>
	<body>
		<?php include_once("header.php"); ?>
		<h2>Proposer une offre</h2>
		Quel carte voulez-vous proposer ?
		<form method ="POST" action="validerOffre.php">
		<select name="nomCarte" id="nomCarte">
			<?php ?>
		</select>

		</form>
	</body> 
</html>