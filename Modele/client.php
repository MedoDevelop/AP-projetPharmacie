<?php
include_once "bd.inc.php";

function GetAllClient(){
    $db = connexionPDO();
    $query = $db->query("SELECT * FROM client");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function addClient($numSecu,$nom,$prenom,$mail,$tel,$adrRue,$adrVille,$adrCp,$dateNaiss,$mutuelle){
	
	$db = connexionPDO();

	$req=$db->prepare('INSERT INTO CLIENT (numeroSecurite,nom,prenom,mail,tel,adresseRue,adresseVille,adresseCP,dateNaissance,idMutuelle) VALUES (:numSecu,:nom,:prenom,:mail,:tel,:adrRue,:adrVille,:adrCp,:dateNaiss,:mutuelle)');

	$req->bindValue(":numSecu",$numSecu,PDO::PARAM_INT);
	$req->bindValue(":nom",$nom,PDO::PARAM_STR);
	$req->bindValue(":prenom",$prenom,PDO::PARAM_STR);
	$req->bindValue(":mail",$mail,PDO::PARAM_STR);
	$req->bindValue(":tel",$tel,PDO::PARAM_STR);
	$req->bindValue(":adrRue",$adrRue,PDO::PARAM_STR);
	$req->bindValue(":adrVille",$adrVille,PDO::PARAM_STR);
	$req->bindValue(":adrCp",$adrCp,PDO::PARAM_INT);
	$req->bindValue(":dateNaiss",$dateNaiss,PDO::PARAM_STR);
	$req->bindValue(":mutuelle",$mutuelle,PDO::PARAM_STR);

    $req->execute();
}

function verifyAssociationWithOrdo($id){
            $db = connexionPDO();
            $query = $db->prepare("SELECT * FROM ordonnance WHERE idClient= :id;");
            $query->bindValue(":id",$id,PDO::PARAM_INT);
            $query->execute();
            $count=$query->rowCount();
            return $count;
}

?>