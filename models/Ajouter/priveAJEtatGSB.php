<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Ajouter etat</title>
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
	
<!-- code php de ajouter etat anciennement ici -->

	<p>Etat ajouté à la base de données : </p>
	
	<p>Numéro <?php echo $_POST['idEtat']; ?></p>
	<p>Libelle : <?php echo $_POST['libelle'];?><p>

</body>
</html>

