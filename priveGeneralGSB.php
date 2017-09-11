<?php
include("includes/conBDD.php");
?>

<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8"/>
    <title>page protéger</title>
    <link rel="stylesheet" href="protectGSB.css"/>
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
	if($_SESSION['login'] == true){
?>	
	
	<h6>Compte administrateur</h6>
<div style="text-align:center">
	<table border="1px">
		<!-- <caption> Action </caption> --> 
			<thead> <!--En tête du tableau -->
			<tr>
				<th>Consulter</th>
				<th>Ajouter</th>
				<th>Supprimer</th>
				<th>Modifier</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="http://localhost/priveConsulterVisiteursGSB.php">
							<h4>Consulter visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterVisiteursGSB.php">
							<h4>Ajouter des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerVisiteursGSB.php">
							<h4>Supprimer des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierVisiteursGSB.php">
							<h4>Modifier les visiteurs</h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="http://localhost/priveConsulterFraisForfaitGSB.php">
							<h4>Consulter frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterFraisForfaitGSB.php">
							<h4>Ajouter frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerFraisForfaitGSB.php">
							<h4>Supprimer frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierFraisForfaitGSB.php">
							<h4>Modifier frais </h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="http://localhost/priveConsulterEtatGSB.php">
							<h4>Consulter etat </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterEtatGSB.php">
							<h4>Ajouter etats</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerEtatGSB.php">
							<h4>Supprimer etats</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierEtatGSB.php">
							<h4>Modifier etats</h4>
						</a>
					</td>
				</tr>
			</tbody>
	
	</table>
</div>	
</br>
	<?php
}
else{
	?>
		<h6>Autorisation refusé </h6>
		<a href="http://localhost/connexionGSB.php">
		<h6>Réessayer</h6>
		</a>
	<?php
}


?>


</body>
</html>