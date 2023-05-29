<?php
include_once("./Modele/client.php");

include_once("./Vue/header.html");

$mutuelles=sendGet('http://api.test/mutuelle/all');

if(isset($_COOKIE['client'])){
	$client=sendGet('http://api.test/client/id/'.$_COOKIE['client']);
	include_once("./Vue/modifierClient.php");
}else{
	echo('<p align="center">Erreur aucun client sélectionnée</p>');
}

if(isset($_POST['valider'])){
	$numSecu=$_POST['numSecu'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$dateNaiss=$_POST['dateNaiss'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$mutuelle=$_POST['mutuelle'];
	$rue=$_POST['rue'];
	$ville=$_POST['ville'];
	$cp=$_POST['cp'];
	
	$data=array();
	$data['id']=$_COOKIE['client'];
	$data['numSecu']=$numSecu;
	$data['nom']=$nom;
	$data['prenom']=$prenom;
	$data['mail']=$email;
	$data['tel']=$tel;
	$data['rue']=$rue;
	$data['ville']=$ville;
	$data['cp']=$cp;
	$data['dateNaiss']=$dateNaiss;
	$data['idMutuelle']=$mutuelle;

	sendPUT('http://api.test/client/update',$data);

	echo('<p class="subtitle is-4" align="center" style="color : green"><b>Le client a été modifié avec succès, pour voir les changements <a href="?action=consulClient">cliquez ici</a></b></p>');
}

include_once("./Vue/footer.html");

?>
