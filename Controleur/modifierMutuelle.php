<?php
include_once("./Modele/mutuelle.php");
include_once("./Vue/header.html");

if(isset($_COOKIE['mutuelle'])){
	$mutuelle=getMutuelleById($_COOKIE['mutuelle']);
	include_once("./Vue/modifierMutuelle.php");
}else{
	echo('<p align="center">Erreur aucune mutuelle sélectionnée</p>');
}
include_once("./Vue/footer.html");

if(isset($_POST['valider'])){
	$nom=$_POST['nom'];
	$mail=$_POST['email'];
	$tel=$_POST['tel'];

	updateMutuelle($mutuelle['idMutuelle'],$nom,$mail,$tel);

	
}


?>
