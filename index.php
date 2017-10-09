<?php 

// require --> inclut le contenue d'un autre fichier, arrête le script et envoie un message d'erreur si il y a une erreur 
// Donne l'accès aux fonctions qui sont dans le controller 
require "/controller/conBDD.php";


// Verifie que txtLogin et txtMdp soient définit et non nul
	// si txtLogin et txtMdp non null et définit, alors on se connecte à la base de donnée 
if((isset($_POST["txtLogin"]))&& (isset($_POST["txtMdp"]))){
	
	testConnect();
}

	// Si txtLogin et txtMdp non définit ou null on va regarder si il l'utilisateur n'est pas déjà connecté, si il ne l'est pas on le renvoie à la page d'accueil 
else{
	//Veut dire : 
	// Si l'etat du visiteur est = à connexion, ca veut dire que le visiteur est déjà logé donc on l'envoie directement sur la page de connexion
		if((isset($_GET["etat"]))&&($_GET["etat"] == "connexion")){
			//Appel la fonctionl connexion qui se trouve dans le controller conBDD.php
			connexion();
	}
	//Sinon, on envoie le visiteur sur la page d'accueil du site directement grâce à la fonction accueil déclaré dans conBDD.php
		else{
			// Appel la fonction accueil qui se trouve le controller conBDD.php
			// Affiche la page d'accueil
			accueil();
		}

}
	

	// isset --> détermine si une varibale est définie et si elle est différente de null
if((isset($_POST['idVisiteurs'])) && (isset($_POST['nom'])) && (isset($_POST['prenom'])) && (isset($_POST['login'])) && (isset($_POST['mdp'])) && (isset($_POST['adresse'])) && (isset($_POST['cp'])) && (isset($_POST['ville']))){
	envoyer();
	ajoutVisiteursReussi();
}



//Pour la page connexion 
$connecte = false;
try{
	if(isset($_POST['deconnexion']) && $_POST['deconnexion'] == "Deconnexion"){
		session_start ();
		session_unset ();
		session_destroy ();
	}
	else if(isset($_POST['txtLogin']) && isset($_POST['txtMdp']) && $_POST['txtLogin']!="" && $_POST['txtMdp']!="") {	
		controleCo();
		}				
	else {
		echo '<script type="text/javascript">alert("Impossible de vous connecter.");</script>';
	}
		$sql_select = null;
		$st = null;
		$db = null;
		$lignes = null;
}

catch(Exception $e){
	die('Erreurs : ' . $e->getMessage());
}


//VISITEURS 
if(isset($_POST['idVisiteurs'])){
	suppVisiteurs();
	supprVisiteursReussi();
}


if(isset($_POST['idVisiteurs']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){
	ajoutVisiteurs();
}	

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['idVisiteurs'])){
	modifVisiteurs();
	modifVisiteursReussi();
}


// FRAIS 
//Ajouter 
if(isset($_POST['idFraisForfait']) && isset($_POST['libelle']) && isset($_POST['montant'])){
	ajoutFrais();
}
 
 //Modifier 
if(isset($_POST['libelle']) && isset($_POST['montant']) && isset($_POST['idFraisForfait'])){
	modifFrais();
}

//Supprimer 
if(isset($_POST['idFraisForfait'])){
	suppFrais();
}

//Etat

//Ajouter
if(isset($_POST['idEtat']) && isset($_POST['libelle'])){
	ajoutEtat();
	ajoutEtatReussi();
}
//Modifier 
if(isset($_POST['libelle']) && isset($_POST['idEtat'])){
	modifEtat();
}

//Supprimer 
if(isset($_POST['idEtat'])){
	suppEtat();
}


	?>