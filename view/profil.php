<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
					<div id="avatar_profil"><img width="128" src="<?php echo $avatar; ?>" alt="avatar de <?php echo $data['name']; ?>" /></div>
					<h2><?php displayPseudo($data['name'], $data['admin']); ?></h2>
					<dl id="desc_profil">
						<dt>Pseudo</dt><dd><?php echo $data['pseudo'];  ?></dd>
						<dt>Email</dt><dd><?php echo $data['email']; ?></dd>
						<dt>Date de naissance</dt><dd><?php echo $data['birth']; ?></dd>
						<dt>Genre</dt><dd><?php echo $data['gender']; ?></dd>
						<dt>Biographie</dt><dd><?php echo $data['bio']; ?></dd>
					</dl>
					<?php echo $editLink; ?>
				</section>
				<?php if(isLogged())
				{ ?>
				<section class="content center">
					<?php if($isPersonalProfil) displayBRB('Nouvel échange', 'nouvelEchange.php'); ?>
					<a href="cartes.php?id=<?= $uid ?>">Cartes du joueur</a>
				</section>
				<?php } ?>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
