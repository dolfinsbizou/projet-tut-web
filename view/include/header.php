<div id="header-wrapper">
	<nav>
	<header>
		<h1> <a id="logo" href="/"><img src="/img/Logo_site.png" height="100" alt="logo"/></br>Monopoly-Exchange</a></h1>
	</header>
	<?php
	if (isLogged())
	{
		?>
			<a href="/deconnexion.php">Déconnexion</a>
		<?php
	}
	else
	{
		?>
		<a href ="/connexion.php">Connexion</a>
		<?php
	}

	?>
</div>