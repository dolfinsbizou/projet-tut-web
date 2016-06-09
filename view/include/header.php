<div id="header-wrapper">
	<nav>
	<header>
		<h1><a id="logo_title" href="/"><img src="/img/logo.png" height="150" alt="logo" /></a></h1>
	</header>
		<ul>
		<li><a href="/">Accueil</a></li>
		<li><?php 
		if(isLogged())
		{
		?>
			<a href="/profil.php">Profil</a></li>
			<li><a href="/disconnect.php">Déconnexion</a></li>
			<li><a href="/echanges.php">Echanges</a>
		<?php
		}
		else
		{
		?>
			<a href="/connexion.php">Connexion</a>
		<?php
		}
		?></li>
		<li><a href="/cartes.php">Cartes</a></li>
		</ul>
	</nav>
</div>
