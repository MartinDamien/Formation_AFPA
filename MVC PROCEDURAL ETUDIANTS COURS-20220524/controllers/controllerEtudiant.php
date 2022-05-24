
<?php

require_once "models/modelStudents.php";

function ditbonjour() {
	echo "Bonjour dit";
}

function listeEtudiant() {
	$result = getEtudiants();
	require("views/viewAllEtudiants.php");
}

function listeUnEtudiant($id){
	$result = getUnEtudiant($id) ;
	require("views/viewOneEtudiant.php");
}

function afficheAddEtudiant() {
	require("views/viewAddEtudiant.php");
}

function ajouteEtudiant() {
	addEtudiant($_POST);
	// ecrire dans le modèle. 
}

function afficheModifEtudiant($id) {
	$result = getUnEtudiant($id) ;
	require("views/viewModifEtudiant.php") ;
}

function modifEtudiant($id) {
	// execute une fonction du modele 
	updateEtudiant($id,$_POST);
}

























// connection BDD
require_once("models/modelStudents.php") ; 
// toutes les fonctions de gestion de la base de données pour les etudiants

 //créer controllerEtudiant.php dans le répertoire controllers

// function test() {
// 	echo "je suis le controller etudiant" ;
// }

// function cree($etudiant) {
// 	echo "je crée un etudiant numero: ".$etudiant ;
// }


// http://localhost/mvc1/controllerEtudiant/formAjoutEtudiant 

function formAjoutEtudiant(){
	require_once('views/viewAddStudent.php') ;	
}



function addOneStudent($firstName,$lastName,$mail,$password) {
		// appel d'un fonction enregistre dans la BDD
		// ... actions de vérification... 
		recordStudent($firstName,$lastName,$mail,$password);
}

?>