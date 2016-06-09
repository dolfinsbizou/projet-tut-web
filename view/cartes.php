<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
				<h2>Liste des cartes
				<?php if ($data!=null) 
				{ 
					echo 'de <a href="/profil.php?id=' . $data['id'] . '">';
					displayPseudo($data['pseudo'], $data['admin']);
					echo '</a>';
				} ?></h2>
				<?php if($data == null) {?><p>Sodopoly propose l'intégralité de vos rues préférées ! Voici la liste des cartes que Sodopoly intègre.</p><?php } ?>
					<?php
					foreach($cartes as $cart)
					{
						displayCard($cart['color'], $cart['name']);
						/*if($data!=null && $self) echo '<a href="validerSuppressionCarte.php?id=' . $cart['idLib'] . '"><span class="delete_button">Supprimer</span></a><br />'; else*/ echo '<br />';
					} ?>
					<?php if(empty($cartes))
					{ ?>
					<p>Rien ici... Pour l'instant ! </p>
					<?php } ?>
					<?php if($self) {?><p><a href="ajouterCarte.php">Ajouter une carte à ma bibliothèque</a></p><?php } ?>
				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
