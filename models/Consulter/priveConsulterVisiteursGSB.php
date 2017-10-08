<?php
include("../controller/conBDD.php");
?>

<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Consulter visiteurs</title>
    <link rel="stylesheet" href="../views/protectGSB.css">
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
	
	
<h5>Liste visiteurs : </h5>

<?php

// AMELIORER LE CODE :
	//On pourra ameliorer ce code en utilisant la fonction LIMIT 0, 5 par exmeple
	//qui limitera le nombre de visiteurs à 5 sur la 1ère, 5 sur la 2ème etc...

	
	//Upper --> fonction qui met le paramètre en majuscule 
	//as --> aliace
$reponse = $bdd->query('SELECT UPPER(nom) as nom_Maj, idVisiteurs, prenom, login, mdp, adresse, cp, ville, dateEmbauche FROM visiteur');

if($reponse){
while($donnee = $reponse->fetch()){
	?>
	<table colspan = 2>
		<tr>
			<th>Numéro</th>
				<td><?php echo $donnee['idVisiteurs'];?></td>
		</tr>
		<tr>
			<th>Nom</th>
				<td><?php echo $donnee['nom_Maj']; ?></td>
		</tr>
		<tr>
			<th>Prénom</th>
				<td> <?php echo $donnee['prenom']; ?></td>
		</tr>
		<tr>
			<th>Login</th>
				<td><?php echo $donnee['login']; ?></td>
		</tr>
		<tr>
			<th>Mot de passe</th>
				<td><?php echo $donnee['mdp']; ?> </td>
		</tr>
		<tr>
			<th>Adresse</th>
				<td><?php echo $donnee['adresse']; ?></td>
		</tr>
		<tr>
			<th>Code postale</th>
				<td><?php echo $donnee['cp'];?></td>
		</tr>
		<tr>
			<th>Ville</th>
				<td><?php echo $donnee['ville'];?></td>
		</tr>
		<tr>
			<th>Date de l'embauche</th>
				<td><?php echo $donnee['dateEmbauche'];?></td>
		</tr>
	</table>
	<p>____________________________________________________________________________________________________________________________________________________</p>
	<p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
	<p>______________________________________________________________________________________</p>
	
	<?php
}
$reponse->closeCursor(); //termine le traitement de la requête 

}
else{
	echo "Aucune donnée enregistrer";
}
?>



</body>
</html>
