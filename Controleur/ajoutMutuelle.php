<?php
include_once("./Modele/mutuelle.php");

include_once("./Vue/header.html");
include_once("./Vue/formMutuelle.php");
include_once("./Vue/footer.html");

if(isset($_POST['valider'])){
	$nom=$_POST['nom'];
	$mail=$_POST['email'];
	$tel=$_POST['tel'];

	$data=array();
	$data['nom']=$nom;
	$data['mail']=$mail;
	$data['tel']=$tel;

	print_r($data);
	
	sendPost('http://api.test/mutuelle/create',$data);
	//CreateMutuelle($nom,$mail,$tel);
	
}

?>
