<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
					<h2>Ajouter une carte</h2>
					<form action="validerAjoutCarte.php" method="post">
						<label for="card">Carte à ajouter : </label>
						<select id="card" name="card">
							<?php foreach($cartes as $cart)
							{ ?>
							<option value="<?= $cart['id'] ?>"><?= $cart['name'] ?></option>
							<?php } ?>
						</select><br />
						<input type="submit" value="Valider" />
					</form>
				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
