<?php
include("../controller/conBDD.php");
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>modifier visiteurs</title>
    <link rel="stylesheet" href="../Vue/protectGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="../views/index.html">
			<h4>GSB<h4>
		</a>
	</div>
	
	<?php
	$modif = $bdd->prepare('UPDATE visiteur SET nom = ?, prenom = ?, login = ?, mdp = ?, adresse = ?, cp = ?, ville = ?, dateEmbauche = NOW() WHERE idVisiteurs = ?');
	$modif->execute(array(
	$_POST['nom'],
	$_POST['prenom'],
	$_POST['login'],
	$_POST['mdp'],
	$_POST['adresse'],
	$_POST['cp'],
	$_POST['ville'],
	$_POST['idVisiteurs']
	));
	?>
	
	<p>Le visiteur numéro <?php echo $_POST['idVisiteurs'];?> à bien été mofidier</p>
<?php 
	$modif->closeCursor();
?>
</body>
</html>
