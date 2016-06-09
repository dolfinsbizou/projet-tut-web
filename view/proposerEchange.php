<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
					<h2>Proposer un échange</h2>
					<?php if($hasCards)
					{ ?>
					<p><a href="profil.php?id=<?=$echange['idUS']?>"><?php displayPseudo($echange['pseudoUS'], $echange['adminUS']); ?></a> propose : <br /><?php displayCard($echange['colorCS'], $echange['nameCS']); ?></p>
					<form action="validerEchange.php?id=<?= $echange['id']?>" method="post">
						<label for="card">Carte à proposer: </label>
						<select id="card" name="card">
							<?php foreach($cartes as $cart)
							{ ?>
							<option value="<?= $cart['idLib'] ?>"><?= $cart['name'] ?></option>
							<?php } ?>
						</select><br />
						<label for="comment">Commentaire : </label><textarea id="comment" name="comment" placeholder="Ajoutez un petit mot !"><?= $echange['comment'] ?></textarea><br />
						<input type="submit" value="Valider" />
					</form>
					<?php } 
					else
					{ ?>
					<p>Fâcheux... Vous n'avez aucune carte ! Ajoutez-en à votre bibliothèque !</p>
					<?php } ?>
				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
