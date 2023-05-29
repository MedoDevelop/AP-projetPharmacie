<?php
include_once("./Modele/mutuelle.php");

include_once("./Vue/header.html");

if(isset($_COOKIE['mutuelle'])){
	$mutuelle=sendGet('http://api.test/mutuelle/id/'.$_COOKIE['mutuelle']);
	include_once("./Vue/modifierMutuelle.php");
}else{
	echo('<p align="center">Erreur aucune mutuelle sélectionnée</p>');
}

if(isset($_POST['valider'])){
	$nom=$_POST['nom'];
	$mail=$_POST['email'];
	$tel=$_POST['tel'];

	$data=array();
	$data['id']=$_COOKIE['mutuelle'];
	$data['nom']=$nom;
	$data['mail']=$mail;
	$data['tel']=$tel;

	sendPUT('http://api.test/mutuelle/update',$data);
	echo('<p class="subtitle is-4" align="center" style="color : green"><b>La mutuelle a été modifiée avec succès, pour voir les changements <a href="?action=modifierMutuelle">cliquez ici</a></b></p>');
}

if(isset($_POST['supprimer'])){
	
}

include_once("./Vue/footer.html");

?>
