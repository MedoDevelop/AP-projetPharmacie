
<?php
include_once("./Modele/mutuelle.php");

include_once("./Vue/header.html");
include_once("./Vue/formMutuelle.php");

if(isset($_POST['valider'])){
	$nom=$_POST['nom'];
	$mail=$_POST['email'];
	$tel=$_POST['tel'];

	$data=array();
	$data['nom']=$nom;
	$data['mail']=$mail;
	$data['tel']=$tel;

	//print_r($data);

	sendPost('http://api.test/mutuelle/create',$data);
	echo('<p class="subtitle is-4" align="center" style="color : green"><b>La mutuelle a été enregistrée avec succès, pour voir les changements <a href="?action=consulMutuelle">cliquez ici</a></b></p>');
	
}
include_once("./Vue/footer.html");
?>
