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

// fonctions concernant les visiteurs 
function consulterVisiteurs(){
}

function ajouterVisiteurs(){
//Marche uniquement si tous les champs sont correctement rempli 
//Mais n'affiche pas de messages d'erreurs si les champs sont mal rempli
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
}
function modifierVisiteurs(){}
function supprimerVisiteurs(){}



// Functions concernant les frais 
function consulterFrais(){
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



function ajouterFrais(){
	$req = $bdd->prepare('INSERT INTO fraisforfait(idFraisForfait, libelle, montant) VALUES(?, ?, ?)');
$req->execute(array(
	$_POST['idFraisForfait'],
	$_POST['libelle'],
	$_POST['montant']));
}


function modifierFrais(){}


function supprimerFrais(){}


// Fonctions concernant les etats 
function consulterEtat(){}


function ajouterEtat(){
	$req = $bdd->prepare('INSERT INTO etat(idEtat, libelle) VALUES(?, ?)');
	$req -> execute(array(
		$_POST['idEtat'],
		$_POST['libelle']
	));
}


function modifierEtat(){
	$modif = $bdd->prepare('UPDATE etat SET libelle = ? WHERE idEtat = ?');
	$modif->execute(array(
		$_POST['libelle'],
		$_POST['idEtat']
	));
}
function supprimerEtat(){}




?>

