<DOCTYPE html>
<html lang ="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php");?>
		<div id = "content_wrapper">
			<table>
				<tr>
					<td>
						Nom de la carte
					</td>
					<td>
						Couleur de la carte
					</td>
				</tr>
				<?php afficheToutesLesCarte(); ?>
			</table>
		</div>
		<?php include_once("include/footer.php");?>
	</body>
</html>