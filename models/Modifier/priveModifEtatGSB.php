<?php
include("/controller/conBDD.php");
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Modifier etats</title>
    <link rel="stylesheet" href="/views/protectGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>
	<div id="class1">
		<a href="../views/indexVue.php">
			<h4>GSB<h4>
		</a>
	</div>
	<h6>Modifier etat</h6>
<!-- code php de modifier etat anciennement ici -->

	<p>Etat numéro <?php echo $_POST['idEtat'];?> Modifier</p>
</br>
	<p>Modification : </p>
</br>
	<p> libelle : <?php echo $_POST['libelle'];?></p>

</body>
</html>