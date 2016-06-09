<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
				<h2>Liste des cartes<?= ($data!=null?(' de ' . $data['pseudo']):'')?></h2>
				<?php if($data == null) {?><p>Sodopoly propose l'intégralité de vos rues préférées ! Voici la liste des cartes que Sodopoly intègre.</p><?php } ?>
					<?php
					foreach($cartes as $carte)
					{
						displayCard($carte['color'], $carte['name']);
						echo '<br />';
					} ?>
					<?php if($self) {?><p><a href="ajouterCarte.php">Ajouter une carte à ma bibliothèque</a></p><?php } ?>
				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
