<?php
include_once "bd.inc.php";

//Vérification sur la base de donnée pour l'existance de la forme 
function checkIfFormeExist($lib){
	
	$db = connexionPDO();

	$req=$db->prepare('SELECT libelle FROM FORME WHERE libelle=:lib');

	$req->bindValue(":lib",$lib,PDO::PARAM_STR);
	
    $req->execute();

    $count=$req->rowCount();
    
    return $count;
}

//Ajout d'une forme dans la base de données
function addForme($lib){
	
	$db = connexionPDO();

		$req=$db->prepare('INSERT INTO FORME (libelle) VALUES (:lib)');

		$req->bindValue(":lib",$lib,PDO::PARAM_STR);
	
    	$req->execute();

	
}

