
<?php


require "/models/modele.php";

// Fonction qui renvoie directement à l'accueil du site 
function accueil(){
	//indexVue.php corresopnd à la page d'accueil du site
	require "/views/indexVue.php";
}

// Fonction qui renvoie à la page de onnexion
function connexion(){
	require "/views/connexionGSB.php";
}

function controleCo(){
$lignes = textConnexion();
if($lignes[0] != null){
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
				echo "<p>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']."".", vous êtes connecté(e)</p>";
			// require de la vue de connexion 
}
else{
	echo "Erreur de connexion";
}
}


//Affiche le tableau d'administration qui permet d'ajouter, supprimer...
function tableauAdmin(){
	require "/views/tableauAdmin.php";
}

function inscription(){
// Fonction qui renoie à la page d'inscription 
	require "/views/inscriptionGSB.php";
}

// Récapitule les données saisie dans le formulaire d'inscription, avec message de validation 
function ajoutVisiteursReussi(){
	require "/views/ajoutVisiteursReussi.php";
}
function supprVisiteursReussi(){
	require "/views/Supprimer/priveSupprVisiteursGSB.php";
}
function modifVisiteursReussi(){
	require "/views/Modifier/priveModifVisiteursGSB.php";
}

function ajoutEtatReussi(){
	require "/models/Ajouter/priveAJEtatGSB.php";
}


function ajoutFraisReussi(){
	require"/priveAjouterFFGSB.php";
}


function testConnect(){
// Fonction qui permet de faire la connexion avec la base de donnée 
// En relation avec la base de donnée, donc fonction présente dans modele.php
	bdd();
}


function envoyer(){
// Fonction présente dans modele.php
// Sert à envoyer les données de l'utilisateur à la base de donnée 
	envoyerGSB();
}


// Fonction pour visiteurs 

function consVisiteurs(){
	consulterVisiteurs();
}
function ajoutVisiteurs(){
	ajouterVisiteurs();
}
function modifVisiteurs(){
	modifierVisiteurs();
	
}
function suppVisiteurs(){
	supprimerVisiteurs();
}




// Fonction pour frais  

function conFrais(){
	consulterFrais();
}
function ajoutFrais(){
	ajouterFrais();
}
function modifFrais(){
	modifierFrais();
}
function suppFrais(){
	supprimerFrais();
}


//Fonctiokn pour etat 

function conEtat(){
	consulterEtat();
}
function ajoutEtat(){
	ajouterEtat();
}
function modifEtat(){
	modifierEtat();
}
function suppEtat(){
	supprimerEtat();
}
?>