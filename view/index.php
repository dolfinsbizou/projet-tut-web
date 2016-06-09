<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_left">
				<section class="content">
					<h2>Présentation</h2>
					<p>Sodopoly, le jeu évènement de l'année 2016, maintenant en ligne ! Planifiez vos échanges, gérez votre collection tout à fait gratuitement !</p>
					<p>Sodopoly est le nouveau <abbr title="Tradinc Cards Game">TCG</abbr> évènement ! Basé sur les cartes du légendaire jeu de Monopoly, le Sodopoly offre la possibilité de faire combattre les meilleures cartes de jeu du Monopoly. Place de la Bourde, Rue la Fayette, vos cartes préférées sont réunies dans un TCG ludique, de 7 à 77 ans. (79,99€ chez votre magasin participant sous réserve de disponibilité. Sodopoly company ne garantit pas le fun lors des parties de Sodopoly. Peut contenir des traces d'amiante.)</p>
				</section>
			</div>
			<div id="content_right">
				<section class="content center">
					<?php displayBRB($brb_title, $brb_target);
					echo $brb_sub; ?>
				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
