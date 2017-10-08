<?php
require "../controller/conBDD.php";
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
    <link rel="stylesheet" href="../views/styleGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>

<body>
	<div id="class1">
		<a href="../views/indexVue.php">
			<h4>GSB  <h4>
		</a>
	</div>
</br>


		<fieldset>
			<?php
				//htmlspecialchars est une fonction qui permet que les caractères taper dans les champs soient affichable mais ne se transforme pas en pop_up.
				echo "Bonjour " . htmlspecialchars($_POST['prenom']) . ", bienvenu dans notre espace membre !";
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