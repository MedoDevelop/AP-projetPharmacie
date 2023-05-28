<?php
include_once("./Modele/mutuelle.php");
if(isset($_COOKIE['mutuelle'])){
	include_once("./Vue/header.html");	
}else{
	echo('<p align="center">Erreur aucune mutuelle sélectionnée</p>');
}
include_once("./Vue/header.html");
include_once("./Vue/supprimerMutuelle.php");


if(isset($_POST['supprimer'])){
	sendDelete('http://api.test/mutuelle/delete/'.$_COOKIE['mutuelle']);
	header("Location: ?action=consulMutuelle");
}

?>