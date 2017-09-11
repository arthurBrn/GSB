<?php
include("includes/conBDD.php");
?>

<?php
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
				echo "<p>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']." " . ",vous êtes bien connecté(e)</p>";
				?>
				<a href="index.html"><p>Retour à l'accueil</a></p>";
				<?php
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

<?php/* 
} 
*/?>


</div>
</body>
</html>









 