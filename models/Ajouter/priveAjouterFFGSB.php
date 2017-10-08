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
    <title>Ajouter frais</title>
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
	
<!-- code de ajouter frais anciennement ici --> 


	<p>Frais ajouté à la base de données : </p>

	<p>Numéro : <?php echo $_POST['idFraisForfait'];?></p>
	<p>Libelle : <?php echo $_POST['libelle'];?></p>
	<p>Montant : <?php echo $_POST['montant'];?></p>	

	<?php 
	$req->closeCursor();
	?>
</body>
</html>