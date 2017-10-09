<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8"/>
    <title>page protéger</title>
    <link rel="stylesheet" href="..\views\protectGSB.css"/>
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
<div id="class1">
		<a href="../views/indexVue.php">
			<h4>GSB  <h4>
		</a>
	</div>
	
	</br>
	</br>

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
						<a href="../views/consulterVisiteurs.php">
							<h4>Consulter visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="../views/Ajouter/priveAjouterVisiteursGSB.php">
							<h4>Ajouter des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="../views/Supprimer/priveSupprimerVisiteursGSB.php">
							<h4>Supprimer des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="../views/Modifier/priveModifierVisiteursGSB.php">
							<h4>Modifier les visiteurs</h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="../views/Consulter/priveConsulterFraisForfaitGSB.php">
							<h4>Consulter frais </h4>
						</a>
					</td>
					<td>
						<a href="../views/Ajouter/priveAjouterFraisForfaitGSB.php">
							<h4>Ajouter frais </h4>
						</a>
					</td>
					<td>
						<a href="../views/Supprimer/priveSupprimerFraisForfaitGSB.php">
							<h4>Supprimer frais </h4>
						</a>
					</td>
					<td>
						<a href="../views/Modifier/priveModifierFraisForfaitGSB.php">
							<h4>Modifier frais </h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="../models/Consulter/priveConsulterEtatGSB.php">
							<h4>Consulter etat </h4>
						</a>
					</td>
					<td>
						<a href="../views/Ajouter/priveAjouterEtatGSB.php">
							<h4>Ajouter etats</h4>
						</a>
					</td>
					<td>
						<a href="../views/Supprimer/priveSupprimerEtatGSB.php">
							<h4>Supprimer etats</h4>
						</a>
					</td>
					<td>
						<a href="../views/Modifier/priveModifierEtatGSB.php">
							<h4>Modifier etats</h4>
						</a>
					</td>
				</tr>
			</tbody>
	
	</table>
</div>	
</br>

</body>
</html>