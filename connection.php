<html>
<head>
	<title>Connect </title>
	<meta charset="utf-8"/>
</head>
<body >

<?php 
	$dns='mysql:host=localhost;dbname=ae';
	$utilisateur='root';
	$pwd='';

	try
	{
		$con=new PDO($dns,$utilisateur,$pwd);
		echo"Connection reussie";
	}

	catch(Exception $e)
	{
		echo"Connection à Mysql est impossible:";$e->getMessage();
		die();
	}
 ?>
 <!---
 <header class="header">
		<div class="center">
			<nav class="head_nav">
				<div class="Entete"></div>
					<ul>
						<li><a href="Inscription.php" title="Inscription">Inscription</a></li>
						<li><a href="Eleve.php" title="Condidat">Condidat</a></li>
						<li><a href="Vehicule.php" title="Vehicule">Vehicule</a></li>
						<li><a href="Moniteur.php" title="Moniteur">Moniteur</a></li>
						
					</ul>			
			</nav>
		</div>
</header>-->

</body>
</html>
