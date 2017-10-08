<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../views/styleGSB.css">
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
		<a href="../views/indexVue.php">
			<h4>GSB  <h4>
		</a>
	</div>	
<div id="form">
<h2>Connexion</h2>
	<fieldset>
		<form name = "frmFormulaire" action="index.php" method=POST onSubmit="return verif_formulaire()">
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

</div>
</body>
</html>


