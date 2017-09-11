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
    <title>Supprimer visiteurs</title>
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
$req = $bdd->prepare('DELETE FROM visiteur WHERE idVisiteurs = ?');
$req->execute(array(
	$_POST['idVisiteurs'])) ?>
	
<p> Le visiteur numéro <?php echo $_POST['idVisiteurs']; ?> à bien été suprrimer de la base de données </p>
<?php 
	$req->closeCursor();
?>
</body>
</html>