<?php
include_once("./Modele/mutuelle.php");
$mutuelles=sendGet('http://api.test/mutuelle/all');

include_once("./Vue/header.html");
include_once("./Vue/formClient.php");
include_once("./Vue/footer.html");

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

	sendPOST('http://api.test/client/add',$data);

	echo('<p class="subtitle is-4" align="center" style="color : green"><b>Le client a été enregistré avec succès, pour voir les changements <a href="?action=consulClient">cliquez ici</a></b></p>');
}

?>
