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
}

?>





	