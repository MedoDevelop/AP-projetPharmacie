<?php
include_once "bd.inc.php";

function GetAllOrdonnance(){
    $db = connexionPDO();
    $query = $db->query("SELECT * FROM ordonnance");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

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

function setDateDebut($val)
{
	$db = connexionPDO();
    $query = $db->prepare("SELECT DATE_FORMAT(DATE_ADD(NOW(), INTERVAL ? MONTH), '%Y-%m-%d');");
    $query->execute([$val]);
    return $query->fetch(PDO::FETCH_BOTH);//index nombre et noms associatifs
}






?>