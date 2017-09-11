<?php
include("includes/conBDD.php")
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Modifier frais forfait</title>
    <link rel="stylesheet" href="protectGSB.css">
    <script src="script.js"></script>
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
$modif = $bdd->prepare('UPDATE fraisforfait SET libelle = ?, montant = ? WHERE idFraisForfait = ?');
$modif->execute(array(
$_POST['libelle'],
$_POST['montant'],
$_POST['idFraisForfait']
));
?>

<p>Le frais numéro <?php echo $_POST['idFraisForfait'];?> à bien été modifier</p>
<?php 
	$modif->closeCursor();
?>
</body>
</html>