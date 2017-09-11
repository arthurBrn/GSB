<?php
include("includes/conBDD.php")
?>

<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Donner reçu</title>
    <link rel="stylesheet" href="styleGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>

<body>
	<div id="class1">
		<a href="http://localhost/index.html">
			<h4>GSB  <h4>
		</a>
	</div>
</br>

<div id="envGSB">
	<?php 
		if(isset($_POST['idVisiteurs']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){

$req = $bdd->prepare('INSERT INTO Visiteur(idVisiteurs, nom, prenom, login, mdp, adresse, cp, ville, dateEmbauche) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');

$req->execute(array(
	$_POST['idVisiteurs'],
	$_POST['nom'],
	$_POST['prenom'],
	$_POST['login'],
	$_POST['mdp'],
	$_POST['adresse'],
	$_POST['cp'],
	$_POST['ville']));
	
		}
	?>
		<fieldset>
			<?php
				//htmlspecialchars est une fonction qui permet que les caractères taper dans les champs soient affichable mais ne se transforme pas en pop_up.
				echo "Bonjour " . htmlspecialchars($_POST['prenom']) . ", beinvenu dans notre espace membre !";
				echo "<br><br>";
				echo "Numéro : " . htmlspecialchars($_POST['idVisiteurs']);
				echo "<br>";
				echo "Nom : " . htmlspecialchars($_POST['nom']);
				echo "<br>";
				echo "Prenom : " . htmlspecialchars($_POST['prenom']);
				echo "<br>";
				echo "Login : " . htmlspecialchars($_POST['login']);
				echo "<br>";
				echo "Mot de passe : " .htmlspecialchars($_POST['mdp']);
				echo "<br>";
				echo "Adresse : " . htmlspecialchars($_POST['adresse']);
				echo "<br>";
				echo "Code postale : " . htmlspecialchars($_POST['cp']);
				echo "<br>";
				echo "Ville : " . htmlspecialchars($_POST['ville']);
				echo "<br> <br>";
			?>
		</fieldset>	
</div>
</body>
</html>