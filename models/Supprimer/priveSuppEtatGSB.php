<?php
require("../controller/conBDD.php");
?>


<?php 
	session_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Supprimer etats</title>
    <link rel="stylesheet" href="../Vue/styleGSB.css">
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
$req = $bdd->prepare('DELETE FROM etat WHERE idEtat = ?');
$req->execute(array(
	$_POST['idEtat']
))
?>

<p>L'etat numéro <?php echo $_POST['idEtat']; ?> à bien été supprimer </p>

</body>
</html>