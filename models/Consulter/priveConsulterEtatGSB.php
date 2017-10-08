<?php
include("C:\wamp64\www\Controleur\conBDD.php");
?>

<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Consulter etat</title>
    <link rel="stylesheet" href="../CodeIgniter-3.1.5/application/views/protectGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="C:/wamp64/www/CodeIgniter-3.1.5/application/views/index.html">
			<h4>GSB<h4>
		</a>
	</div>

<h5>Etat : </h5>
<?php
$reponse = $bdd->query('SELECT * FROM Etat');

while($donnee = $reponse->fetch()){
	?>
	<table colspan = 2>
		<tr>
			<th>Numéro</th>
				<td><?php echo $donnee['idEtat'];?></td>
			</th>
		</tr>
		<tr>
			<th>Libelle</th>
				<td><?php echo $donnee['libelle'];?></td>
		</tr>
	</table>
	<p>____________________________________________________________________________________________________________________________________________________</p>
	<p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
	<p>______________________________________________________________________________________</p>	
	<?php
}
$reponse -> closeCursor(); //termine le traitement de la requête 
?>
</body>
</html>