<?php
include("includes/conBDD.php")
?>


<?php 
	session_start();
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Ajouter etat</title>
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
	$req = $bdd->prepare('INSERT INTO etat(idEtat, libelle) VALUES(?, ?)');
	$req -> execute(array(
		$_POST['idEtat'],
		$_POST['libelle']
	));
?>

	<p>Etat ajouté à la base de données : </p>
	
	<p>Numéro <?php echo $_POST['idEtat']; ?></p>
	<p>Libelle : <?php echo $_POST['libelle'];?><p>
<?php 
	$req->closeCursor();
?>
</body>
</html>