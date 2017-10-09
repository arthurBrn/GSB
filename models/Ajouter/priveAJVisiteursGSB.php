<?php
include("/controller/conBDD.php");
?>


<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Ajouter visiteurs</title>
    <link rel="stylesheet" href="/views/protectGSB.css">
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="../views/indexVue.php">
			<h4>GSB<h4>
		</a>
	</div>
	
<!-- code php de ajouter visiteurs anciennement ici -->
	
	<p>Visiteurs ajouter à la base de données :</p>
	
	<p>Numéro : <?php echo $_POST['idVisiteurs']; ?> </p>
	<p>Nom : <?php echo $_POST['nom']; ?> </p>
	<p>Prénom : <?php echo $_POST['prenom'];?></p>
	<p>Login : <?php echo $_POST['login'];?></p>
	<p>Mot de passe : <?php echo $_POST['login'];?></p>
	<p>Adresse : <?php echo $_POST['adresse'];?></p>
	<p>Code postale : <?php echo $_POST['cp'];?></p>
	<p>Ville : <?php echo $_POST['ville'];?></p>
</body>
</html>