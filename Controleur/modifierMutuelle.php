<?php
include_once("./Modele/mutuelle.php");
include_once("./Vue/header.html");
if($_COOKIE['mutuelle']!=""){
	$mutuelle=getMutuelleById($_COOKIE['mutuelle']);
	include_once("./Vue/modifierMutuelle.php");
}else{
	echo('<p align="center">Erreur aucune mutuelle sélectionnée</p>');
}
include_once("./Vue/footer.html");

if(isset($_POST['valider'])){
	$_POST['']=;
}


?>
