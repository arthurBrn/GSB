<?php
include("../controller/conBDD.php");
?>


<?php 
	session_start();
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Supprimer frais forfait</title>
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
	
<?php
$req = $bdd->prepare('DELETE FROM fraisforfait WHERE idFraisForfait = ?');
$req->execute(array(
	$_POST['idFraisForfait']
))
?>

<p>Le frais numéro <?php echo $_POST['idFraisForfait']; ?> à bien été supprimer </p>
<?php 
	$req->closeCursor();
?>

</body>
</html>