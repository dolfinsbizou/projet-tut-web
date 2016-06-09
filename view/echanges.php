<!DOCTYPE html>
<html lang="fr">
	<?php include_once("include/head.php"); ?>
	<body>
		<?php include_once("include/header.php"); ?>
		<div id="content_wrapper">
			<div id="content_center">
				<section class="content">
					<h2>Liste de vos échanges</h2>
					<ul>
					<?php foreach($selfTrades as $st)
					{ ?>
					<li>
					<?php displayCard($st['colorCS'], $st['nameCS']);?>
					<?php if($st['idUB']!=null) 
					{ ?>
					&lt;-&gt;<?php displayCard($st['colorCB'], $st['nameCB']);?>
					<br />(proposé par <a href="profil.php?id=<?=$st['idUB']?>"><?php displayPseudo($st['pseudoUB'], $st['adminUB']); ?></a>)<br />
					<?php if($st['status'] == 0)
					{ ?>
					<a href="terminerEchange.php?id=<?= $st['id'] ?>&dec=1">Accepter</a>/<a href="terminerEchange.php?id=<?= $st['id'] ?>&dec=-1">Refuser</a>
					<?php }
					else
					{ ?>
					Echange <?= ($st['status']==1?'accepté':'refusé' )?>
					<?php
					}
				   	}
					else
					{ ?>
					<br /><a href="supprimerEchange.php?id=<?= $st['id'] ?>">Supprimer</a>
					<?php } ?><br />
					Commentaire : <?= $st['comment'] ?>
					</li>
					<?php } ?>
					</ul>

					<h2>Liste de vos échanges</h2>
					<ul>
					<?php foreach($avalaibleTrades as $at)
					{ ?>
					<li>
					<?php displayCard($at['colorCS'], $at['nameCS']);?>
					<br />(proposé par <a href="profil.php?id=<?=$at['idUS']?>"><?php displayPseudo($at['pseudoUS'], $at['adminUS']); ?></a>)<br />
					<a href="proposerEchange.php?id=<?= $at['id'] ?>">Proposer</a>
					<br />Commentaire : <?= $at['comment'] ?>
					</li>
					<?php } ?>
					</ul>

				</section>
			</div>
		</div>
		<?php include_once("include/footer.php"); ?>
	</body>
</html>
