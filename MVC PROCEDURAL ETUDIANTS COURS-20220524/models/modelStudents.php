<?php
require_once('models/model.php');

// renvoi une liste d'etudiants. 
function getEtudiants(){
	$bddPDO = connexionBDD();
	$requete = "SELECT * FROM etudiants ORDER BY id ASC";
	$result = $bddPDO->query($requete);
	$data = $result->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

// renvoi 1 etudiant.
function getUnEtudiant($id) {
	$bddPDO = connexionBDD();
	$requete = "SELECT * FROM etudiants WHERE id=?";
	$stmt = $bddPDO->prepare($requete);
	$stmt->execute(array($id));
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	return $data;
}

function addEtudiant($etu) {
	$n = $etu['nom'];
	$p = $etu['prenom'];
	$bddPDO = connexionBDD();
	$requete = "INSERT INTO etudiants (nom,prenom) VALUES(?,?)";
	$stmt = $bddPDO->prepare($requete);
	$stmt->execute(array($n,$p));
}


function updateEtudiant($id,$post) {
	$n = $post['nom'];
	$p = $post['prenom'];
	$bddPDO = connexionBDD();
	$requete = "UPDATE etudiants SET nom=?,prenom=? WHERE id=?";
	$stmt = $bddPDO->prepare($requete);
	$stmt->execute(array($n,$p,$id));
}























// il faut auparavant créer la table et ses champs dans la base de données avec phpmyadmin.
function recordStudent( $firstName, $lastName, $mail, $password){

	$bddPDO = connexionBDD();
	$requete = $bddPDO->prepare('INSERT INTO students(firstName, lastName, mail,  password) 
		VALUES (:firstName, :lastName,:mail, :password)');

	$requete->bindvalue(':firstName', $firstName);
	$requete->bindvalue(':lastName', $lastName);
	$requete->bindvalue(':mail', $mail);
	$requete->bindvalue(':password', $password);
	$resultAddStudent = $requete->execute();
	return $resultAddStudent;

}

/*
function getStudentWithMail($mail){
	$bddPDO = connexionBDD();
	$requete = "SELECT * FROM students WHERE mail ='$mail' ";
	$result = $bddPDO->query($requete);

	$data = $result->fetch(PDO::FETCH_ASSOC);
	return $data;
}
*/





	