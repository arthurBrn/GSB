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
    <title>Consulter frais</title>
    <link rel="stylesheet" href="styleGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="http://localhost/index.html">
			<h4>GSB</h4>
		</a>
	</div>
</br>
<h5>Consulter vos frais </h5>
<?php
$reponse = $bdd->query('SELECT * FROM FraisForfait WHERE mois = ? AND idVisiteurs = ?');
$reponse->execute(array(


));
while($donnee = $reponse->fetch()){
	?>
	<p>Numéro frais forfait : <?php echo $donnee['idFraisForfait'];?></p>
	<p>libelle : <?php echo $donnee['libelle'];?></p>
	<p>Montant : <?php echo $donnee['montant'];?></p>
	<p>####################</p>
<?php
}
$reponse->closeCursor(); //termine le traitement de la requête 
?>
</body>
</html>
