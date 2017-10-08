<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>modifier visiteurs</title>
    <link rel="stylesheet" href="../views/protectGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
			<script language = "javascript" type="text/javascript">
		function verif_formulaire(){
			if((document.frmFormulaire.idVisiteurs.value != "") && (document.frmFormulaire.nom.value != "") && (document.frmFormulaire.prenom.value!="")&&
			(document.frmFormulaire.login.value!="")&&(document.frmFormulaire.mdp.value!="")&&(document.frmFormulaire.adresse.value!="")&&(document.frmFormulaire.cp.value!="")
			&&(document.frmFormulaire.ville.value!="")){
				return true;
			}
			else{
				alert("Vous devez remplir tous les champs ! ");
				document.frmFormulaire.idVisiteurs.focus();
				document.frmFormulaire.nom.focus();
				document.frmFormulaire.prenom.focus();
				document.frmFormulaire.login.focus();
				document.frmFormulaire.mdp.focus();
				document.frmFormulaire.adresse.focus();
				document.frmFormulaire.cp.focus();
				document.frmFormulaire.ville.focus();
				return false;
			}
		}
	</script>
</head>
<body>
	<div id="class1">
		<a href="../views/index.html">
			<h4>GSB<h4>
		</a>
	</div>

	<h6> Quel visiteur souhaitez vous modifiez ? </h6>
	
	<div id="form">
		<fieldset>
			<form name="frmFormulaire" action="../models/Modifier/priveModifVisiteursGSB.php" method=POST onSubmit="return verif_formulaire()">
				<p>Numéro du visiteur que vous souhaitez modifier</p>
					<input type="text" name="idVisiteurs"></input>
		<p>Modifier les données du visiteur : </p>
		</br>
					<p>Nom</p>
				<input type="text" name="nom"></input>
		</br>
					<p>Prenom</p>
				<input type="text" name="prenom"></input>
		</br>
					<p>Login</p>
				<input type="text" name="login"></input>
		</br>
					<p>Mot de passe</p>
				<input type="text" name="mdp"></input>
		</br>
					<p>Adresse</p>
				<input type="text" name="adresse"></input>
		</br>
					<p>Code postal</p>
				<input type="text" name="cp"></input>
		</br>
					<p>Ville</p>
				<input type="text" name="ville"></input>
		</br></br>
				<input type ="submit" value="Modifier"></input>
				<input type="reset" value="Annuler" />
			</form>
		</fieldset>
	</div>
	
</body>
</html>