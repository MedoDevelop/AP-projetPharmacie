<?php
include_once "bd.inc.php";

//Ajout d'une forme dans la base de données
function addForme($lib){
	
	$db = connexionPDO();

		$req=$db->prepare('INSERT INTO FORME (libelle) VALUES (:lib)');

		$req->bindValue(":lib",$lib,PDO::PARAM_STR);
	
    	$req->execute();

}

//Recherche de l'id de la forme dans la base de données
function selectIdForme($lib){
	
		$db = connexionPDO();

		$req=$db->prepare('SELECT idForme FROM FORME WHERE libelle=:lib');

		$req->bindValue(":lib",$lib,PDO::PARAM_STR);
	
    	$req->execute();

    	return $req->fetch();

	
}

