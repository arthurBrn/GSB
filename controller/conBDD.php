
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

//Affiche le tableau d'administration qui permet d'ajouter, supprimer...
function tableauAdmin(){
	require "/views/tableauAdmin.php";
}

// Récapitule les données saisie dans le formulaire d'inscription, avec message de validation 
function inscriptionReussi(){
	require "/views/envoyerGSB.php";
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




function inscription(){
// Fonction qui renoie à la page d'inscription 
	require "/views/inscriptionGSB.php";
}




?>