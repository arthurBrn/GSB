<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Consulter frais forfait</title>
    <link rel="stylesheet" href="/views/protectGSB.css">
    <script src="script.js"></script>
	<link type="image/x-icon" href="logoGSB.JPG" rel="icon"/>
    <style type="text/css"> 
		a:link { text-decoration:none; } 
	</style>
	<script language = "javascript" type="text/javascript">
		function verif_formulaire(){
			if((document.frmFormulaire.Mois.value != "") && (document.frmFormulaire.An.value != "")){
				return true;
			}
			else{
				alert("Vous devez remplir tous les champs ! ");
				document.frmFormulaire.Mois.focus();
				document.frmFormulaire.An.focus();
				return false;
			}
		}
	</script>
</head>
<body>
	<div id="class1">
		<a href="../views/indexVue.php">
			<h4>GSB<h4>
		</a>
	</div>

<h5>Liste frais forfait : </h5>

<div id="form">
	<fieldset>
		<form name="frmFormulaire" action="" method=POST  onSubmit="return verif_formulaire()">
			<p>Rentrer le mois que vous voulez consulter</p>
			<input type="date" name="Mois" value="xx"></input>
			</br></br>
			<p>Rentrez l'année que vous souhaitez consulter</p>
			<input type="date" name="An" value="xxxx"></input>
			
			</br></br>
			<input type="submit" name="Valider"></input>
			<input type="reset" name="Annuler"></input>
		</form>
	</fieldset>
</div>
</body>
</html>