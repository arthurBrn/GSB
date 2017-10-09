<?php
//Modele --> Fait le lien entre le controller et la base de donnée



// Test la bonne connexion à la base de donnée
function bdd(){

//Appel de la base dans models pas controller 
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$sql_select = "SELECT idVisiteurs, nom, prenom, adresse, cp, ville, dateEmbauche FROM visiteur WHERE login='".$_POST['txtLogin']."' AND mdp='".$_POST['txtMdp']."';";
		$st = $db->prepare($sql_select);
		$st->execute();
		$lignes = $st->fetch();
	
		return $lignes;
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
}

// requete sql pour envoyer les données rentrer par le visiteur dans inscriptions
function envoyerGSB(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}


$req = $db->prepare('INSERT INTO Visiteur(idVisiteurs, nom, prenom, login, mdp, adresse, cp, ville, dateEmbauche) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');

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

//Consulter visiteurs 
function consulterVisiteurs(){
	?>
	<h5>Liste visiteurs : </h5>
	<?php
	
	//Upper --> fonction qui met le paramètre en majuscule 
	//as --> aliace
	
	//Prépare la requête 
		$reponse = $bdd->query('SELECT UPPER(nom) as nom_Maj, idVisiteurs, prenom, login, mdp, adresse, cp, ville, dateEmbauche FROM visiteur');

		if($reponse){
			while($donnee = $reponse->fetch()){
	?>
				<table colspan = 2>
					<tr>
						<th>Numéro</th>
						<td><?php echo $donnee['idVisiteurs'];?></td>
					</tr>
					<tr>
						<th>Nom</th>
						<td><?php echo $donnee['nom_Maj']; ?></td>
					</tr>
					<tr>
						<th>Prénom</th>
						<td> <?php echo $donnee['prenom']; ?></td>
					</tr>
					<tr>
						<th>Login</th>
						<td><?php echo $donnee['login']; ?></td>
					</tr>
					<tr>
						<th>Mot de passe</th>
						<td><?php echo $donnee['mdp']; ?> </td>
					</tr>
					<tr>
						<th>Adresse</th>
						<td><?php echo $donnee['adresse']; ?></td>
					</tr>
					<tr>
						<th>Code postale</th>
						<td><?php echo $donnee['cp'];?></td>
					</tr>
					<tr>
						<th>Ville</th>
						<td><?php echo $donnee['ville'];?></td>
					</tr>
					<tr>
						<th>Date de l'embauche</th>
						<td><?php echo $donnee['dateEmbauche'];?></td>
					</tr>
				</table>
	<p>____________________________________________________________________________________________________________________________________________________</p>
	<p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
	<p>______________________________________________________________________________________</p>
	<?php
			}		

		}		
		else{
			echo "Aucune donnée enregistrer";
		}
}








//Ajouter visiteurs 
function ajouterVisiteurs(){
	// Connexion à la base 
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
//Marche uniquement si tous les champs sont correctement rempli 
//Mais n'affiche pas de messages d'erreurs si les champs sont mal rempli

// Vérifie que les champs soient vérifier et non null
	if(isset($_POST['idVisiteurs']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){
		// Prépare la requête d'ajout 
		$req = $db->prepare('INSERT INTO Visiteur(idVisiteurs, nom, prenom, login, mdp, adresse, cp, ville, dateEmbauche) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())');
			//Recupère les informations à ajouter et exécute la requête 
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
	<p> Le visiteur numéro <?php echo $_POST['idVisiteurs']; ?> à bien été ajouter de la base de données </p>
	<?php
}







//Modifier visiteurs 
function modifierVisiteurs(){

	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}

	// Prépare la requête de modification 
	$modif = $db->prepare('UPDATE visiteur SET nom = ?, prenom = ?, login = ?, mdp = ?, adresse = ?, cp = ?, ville = ?, dateEmbauche = NOW() WHERE idVisiteurs = ?');
		//Récupère les informations à modifier dans un tableau array et exécute la requête 
		$modif->execute(array(
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['login'],
			$_POST['mdp'],
			$_POST['adresse'],
			$_POST['cp'],
			$_POST['ville'],
			$_POST['idVisiteurs']
		));
	?>
	<p>Le visiteur numéro <?php echo $_POST['idVisiteurs'];?> à bien été mofidier</p>
	<?php
} 








//Supprimer visiteurs 
function supprimerVisiteurs(){
	//Connexion à la base 
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
	
	
	// Prépare la requête de suppression 
$req = $db->prepare('DELETE FROM visiteur WHERE idVisiteurs = ?');
		//Récupère les informations à modifier et exécute la requête 
	$req->execute(array(
		$_POST['idVisiteurs'])) ?>
<p> Le visiteur numéro <?php echo $_POST['idVisiteurs']; ?> à bien été suprrimer de la base de données </p>
<?php
	
}
















// Functions concernant les frais 
function consulterFrais(){
	//Pas fini 
$reponse = $bdd->query('SELECT * FROM FraisForfait WHERE mois = ? AND idVisiteurs = ?');
$reponse->execute(array(
));
	while($donnee = $reponse->fetch()){
		?>
		<p>Numéro frais forfait : <?php echo $donnee['idFraisForfait'];?></p>
		<p>libelle : <?php echo $donnee['libelle'];?></p>
		<p>Montant : <?php echo $donnee['montant'];?></p>
		<p>####################</p>
	<?php
	}
}


// Ajouter frais 
function ajouterFrais(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}

	//Prépare la requête d'ajout 
	$req = $db->prepare('INSERT INTO fraisforfait(idFraisForfait, libelle, montant) VALUES(?, ?, ?)');
		//Récupère les informations à ajouter et exécute la requête 
		$req->execute(array(
		$_POST['idFraisForfait'],
		$_POST['libelle'],
		$_POST['montant']));
		?>
	<p> Le frais numéro <?php echo $_POST['idFraisForfait']; ?> à bien été ajouter à la base de données </p>
	<?php 
}

	
	
	
	
	
//Modifier frais 
function modifierFrais(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
	// Prépare la requête de modification 
$modif = $db->prepare('UPDATE fraisforfait SET libelle = ?, montant = ? WHERE idFraisForfait = ?');
		// Récupère les informations à modifier et exécute la requête 
	$modif->execute(array(
		$_POST['libelle'],
		$_POST['montant'],
		$_POST['idFraisForfait']
	));
?>
<p>Le frais numéro <?php echo $_POST['idFraisForfait'];?> à bien été modifier</p>
<?php
}


// Fonction supprimer frais
function supprimerFrais(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
	// preparation de la requete 
$req = $db->prepare('DELETE FROM fraisforfait WHERE idFraisForfait = ?');
		// récupère le numéro de l'atat à supprimer et exécute la requête 
	$req->execute(array(
		$_POST['idFraisForfait']
	));
?>
<!-- confirmation du frais supprimer -->
<p>Le frais numéro <?php echo $_POST['idFraisForfait']; ?> à bien été supprimer </p>
<?php 
}













// Fonctions concernant les etats 
function consulterEtat(){
	//préaration de la requête 
$reponse = $bdd->query('SELECT * FROM Etat');
		// boucle while pour parcourir la table dans la bdd et afficher chaque etat 
	while($donnee = $reponse->fetch()){
		?>
		<table colspan = 2>
			<tr>
				<th>Numéro</th>
					<td><?php echo $donnee['idEtat'];?></td>
				</th>
			</tr>
			<tr>
				<th>Libelle</th>
					<td><?php echo $donnee['libelle'];?></td>
			</tr>
		</table>
	<p>____________________________________________________________________________________________________________________________________________________</p>
	<p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
	<p>______________________________________________________________________________________</p>	
	<?php
	}
}

// Ajouter etat 
function ajouterEtat(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
	//Préparation de la requete d'insertion des données 
$req = $db->prepare('INSERT INTO etat(idEtat, libelle) VALUES(?, ?)');
		// Récupère les données rentrer et exécute la requête 
	$req -> execute(array(
		$_POST['idEtat'],
		$_POST['libelle']
	));
	echo "L'etat à bien été ajouter ";
}


// Modifier etat 
function modifierEtat(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}	

	// Préparation de la requête de modification 
$modif = $db->prepare('UPDATE etat SET libelle = ? WHERE idEtat = ?');
	//Récupère les données à modifier et exécute la requête 
	$modif->execute(array(
		$_POST['libelle'],
		$_POST['idEtat']
	));
}


//Supprimer etat 
function supprimerEtat(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=gsbV2;charset=utf8','root','fdbcounter',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exceptions $e){
		die('Erreurs : ' . $e->getMessage());
	
		return false;
	}
	
	//Prépare la requête de suppression
$req = $db->prepare('DELETE FROM etat WHERE idEtat = ?');
		// Récupère le numéro etat et exécute la requête 
	$req->execute(array(
		$_POST['idEtat']
	));

	echo "L'état à bien été supprimer";

}

?>





