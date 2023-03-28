<?php
include_once "../Modele/bd.inc.php";

function addOrdo($numMois,$libPatho,$duree,$active,$dateEmission,$idCli,$idMed){
	
	$db = connexionPDO();

	$req=$db->prepare('INSERT INTO ORDONNANCE (numMois,libPathologie,duree,active,dateEmission,idClient,idMedecin) VALUES (:numMois,:libPatho,:duree,:active,:dateEmission,:idCLi,:idMed)');

	$req->bindValue(":numMois",$numMois,PDO::PARAM_INT);
	$req->bindValue(":libPatho",$libPatho,PDO::PARAM_STR);
	$req->bindValue(":duree",$duree,PDO::PARAM_INT);
	$req->bindValue(":active",$active,PDO::PARAM_BOOL);
	$req->bindValue(":dateEmission",$dateEmission,PDO::PARAM_STR);
	$req->bindValue(":idCli",$idCli,PDO::PARAM_INT);
	$req->bindValue(":idMed",$idMed,PDO::PARAM_INT);


    $req->execute();
}






?>