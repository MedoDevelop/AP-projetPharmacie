<?php
include_once("./Modele/client.php");
if(isset($_COOKIE['client'])){
	include_once("./Vue/header.html");	
}else{
	echo('<p align="center">Erreur aucun client sélectionnée</p>');
}
include_once("./Vue/header.html");
include_once("./Vue/supprimerClient.php");


if(isset($_POST['supprimer'])){
	sendDelete('http://api.test/client/delete/'.$_COOKIE['client']);
	header("Location: ?action=consulClient");
}

?>