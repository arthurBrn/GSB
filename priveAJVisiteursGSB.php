<?php
include("includes/conBDD.php")
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
    <link rel="stylesheet" href="protectGSB.css">
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="http://localhost/index.html">
			<h4>GSB<h4>
		</a>
	</div>
	
<?php

//Marche uniquement si tous les champs sont correctement rempli 

//Mais n'affiche pas de messages d'erreurs si les champs sont mal rempli

if(isset($_POST['idVisiteurs']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){

$req = $bdd->prepare('INSERT INTO Visiteur(idVisiteurs, nom, prenom, login, mdp, adresse, cp, ville, dateEmbauche) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');

$req->execute(array(
	$_POST['idVisiteurs'],
	$_POST['nom'],
	$_POST['prenom'],
	$_POST['login'],
	$_POST['mdp'],
	$_POST['adresse'],
	$_POST['cp'],
	$_POST['ville']));
	?>
	
	<p>Visiteurs ajouter à la base de données :</p>
	
	<p>Numéro : <?php echo $_POST['idVisiteurs']; ?> </p>
	<p>Nom : <?php echo $_POST['nom']; ?> </p>
	<p>Prénom : <?php echo $_POST['prenom'];?></p>
	<p>Login : <?php echo $_POST['login'];?></p>
	<p>Mot de passe : <?php echo $_POST['login'];?></p>
	<p>Adresse : <?php echo $_POST['adresse'];?></p>
	<p>Code postale : <?php echo $_POST['cp'];?></p>
	<p>Ville : <?php echo $_POST['ville'];?></p>
	
	<?php
}
$req->closeCursor();
?>
</body>
</html>