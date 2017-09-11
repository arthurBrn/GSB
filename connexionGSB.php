<?php
include("includes/conBDD.php");
?>

<?php
	session_cache_limiter('private_no_expire, must-revalidate'); //eviter lsg document à expirer 
	session_start();
?>
<?php
/*
//On s'assure que le visiteurs n'est pas connecté, sinon on appelle la fonction erreur 
if($id!=0) erreur(ERR_IS_CO);
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styleGSB.css">
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
	<script language = "javascript" type="text/javascript">
		function verif_formulaire(){
			if((document.frmFormulaire.txtLogin.value != "") && (document.frmFormulaire.txtMdp.value != "")){
				return true;
			}
			else{
				alert("Vous devez remplir tous les champs ! ");
				document.frmFormulaire.txtLogin.focus();
				document.frmFormulaire.txtMdp.focus();
				return false;
			}
		}
	</script>
</head>
<body>
    <div id="class1">
		<a href="http://localhost/index.html">
			<h4>GSB  <h4>
		</a>
	</div>

	
	<!-- Code connexion --> 

	<?php
$connecte = false;
try {
	if(isset($_POST['deconnexion']) && $_POST['deconnexion'] == "Deconnexion"){
		session_start ();
		session_unset ();
		session_destroy ();
	}
	else if(isset($_POST['txtLogin']) && isset($_POST['txtMdp']) && $_POST['txtLogin']!="" && $_POST['txtMdp']!="") {	
		$source = "mysql:host=localhost;dbname=gsbV2";
		$utilisateur = "root";
		$mot_de_passe = "fdbcounter";
		$db = new PDO($source, $utilisateur, $mot_de_passe);
		$sql_select = "SELECT idVisiteurs, nom, prenom, adresse, cp, ville, dateEmbauche FROM visiteur WHERE login='".$_POST['txtLogin']."' AND mdp='".$_POST['txtMdp']."';";
		$st = $db->prepare($sql_select);
		$st->execute();
		$lignes = $st->fetch();
	
		if(count($lignes[0]) == 1){
			$_SESSION['login'] = $_POST['txtLogin'];
			$_SESSION['mdp'] = $_POST['txtMdp'];
			$_SESSION['idVisiteurs'] = $lignes[0];
			$_SESSION['nom'] = $lignes[1];
			$_SESSION['prenom'] = $lignes[2];
			$_SESSION['adresse'] = $lignes[3];
			$_SESSION['cp'] = $lignes[4];
			$_SESSION['ville'] = $lignes[5];
			$_SESSION['dateEmbauche'] = $lignes[6];
			$connecte = true;
				echo "<h2>Connecté</h2>";
				echo "<p>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']." " . ", vous êtes connecté(e)</p>";
				?>
				<a href="index.html"><p>Retour à l'accueil</a></p>
				<?php
				
// ----------------------------------------------------------------------
				?>
<?php
include("includes/conBDD.php");
?>

<?php
	// session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8"/>
    <title>page protéger</title>
    <link rel="stylesheet" href="protectGSB.css"/>
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
</head>
<body>

<?php
	if($_SESSION['login'] == true){
?>	
	
<div style="text-align:center">
	<table border="1px">
		<!-- <caption> Action </caption> --> 
			<thead> <!--En tête du tableau -->
			<tr>
				<th>Consulter</th>
				<th>Ajouter</th>
				<th>Supprimer</th>
				<th>Modifier</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="http://localhost/priveConsulterVisiteursGSB.php">
							<h4>Consulter visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterVisiteursGSB.php">
							<h4>Ajouter des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerVisiteursGSB.php">
							<h4>Supprimer des visiteurs</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierVisiteursGSB.php">
							<h4>Modifier les visiteurs</h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="http://localhost/priveConsulterFraisForfaitGSB.php">
							<h4>Consulter frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterFraisForfaitGSB.php">
							<h4>Ajouter frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerFraisForfaitGSB.php">
							<h4>Supprimer frais </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierFraisForfaitGSB.php">
							<h4>Modifier frais </h4>
						</a>
					</td>
				</tr>
	
				<tr>
					<td>
						<a href="http://localhost/priveConsulterEtatGSB.php">
							<h4>Consulter etat </h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveAjouterEtatGSB.php">
							<h4>Ajouter etats</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveSupprimerEtatGSB.php">
							<h4>Supprimer etats</h4>
						</a>
					</td>
					<td>
						<a href="http://localhost/priveModifierEtatGSB.php">
							<h4>Modifier etats</h4>
						</a>
					</td>
				</tr>
			</tbody>
	
	</table>
</div>	
</br>
	<?php
}
else{
	?>
		<h6>Autorisation refusé </h6>
		<a href="http://localhost/connexionGSB.php">
		<h6>Réessayer</h6>
		</a>
	<?php
}


?>


</body>
</html>
				
				
	
<?php				
				
// ----------------------------------------------------------------------				
	}
	else {
		echo '<script type="text/javascript">alert("Impossible de vous connecter.");</script>';
	}
		$sql_select = null;
		$st = null;
		$db = null;
		$lignes = null;
}
}
catch(Exception $e){
	die('Erreurs : ' . $e->getMessage());
}

if(!$connecte){
?>
	
	



<div id="form">
<h2>Connexion</h2>
	<fieldset>
		<form name = "frmFormulaire" action="connexionGSB.php" method=POST onSubmit="return verif_formulaire()">
			</br>
				<p>Login</p>
					<input type="text" name="txtLogin"></input>
</br></br>
				<p>Mot de passe</p>
					<input type="password" name="txtMdp"></input>
</br></br>
					<input type ="submit" value="connexion"></input>
		</form>
	</fieldset>
</div>

<?php
} 
?>


</div>
</body>
</html>