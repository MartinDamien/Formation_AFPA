<?php
define("BASEURL","http://localhost/afpa/proformations/");
// repertoire racine
// .htaccess
// index.php

// -> controllers
//		controllerEtudiant.php 
// -> models
//		models.php (on aura la connection à la BDD)
//		modelEtudiant.php 
// -> views
//		

if($_GET['action']) {

$params = explode("/", $_GET['action']);

// je recupere le contenu du paramètres action qui possède au minimum
// 1) le nom d'un controller 
// 2) le nom d'une fonction qui va s'appliquer sur le contrôleur
// http://localhost/mvc1/controller/action
// echo $params[0]; // c'est le controller
// echo $params[1]; // c l'action 
// controller sera le nom d'un controller qui sera chargé
// et action sera la fonction àexecuter sue ce controller. 


if($params[0] !=  "") {

	$controller = $params[0];

	$action = "";

	if(isset($params[1])) { $action = $params[1]; }

	require_once('controllers/'.$controller.'.php');

	if(function_exists($action)) {

		if(isset($params[2]) && isset($params[3])){
			$action($params[2],$params[3]);
		} elseif (isset($params[2])) {
			$action($params[2]);
		} else
		{
			$action();
		}
	} else {
		echo "Fonction n'existe pas";
	}
 
}
} else {
 
	require_once('controllers/controllerEtudiant.php');
	listeEtudiant();
}
