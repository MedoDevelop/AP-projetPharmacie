<?php    
include_once("../Modele/forme.php");

function initForme(){
	//Ouverture du fichier CSV
	$file=fopen("../ressources/CIS_bdpm.csv","r");

	//Initialisation du tableau
	$add = 	array();

	//Lecture du fichier CSV
	while(!feof($file))
  	{
		$data=fgetcsv($file);//Ligne du fichier
		if(!empty($data)){
			if(!in_array($data[2], $add)){//data n'est pas liste noir -> ajout du data
	  			if(!empty($data[2])){ //data n'est pas vide
	  				addForme($data[2]);
	  			}
	  		}
	  		array_push($add, $data[2]);//data est ajouter a la liste "noir"
		}
  		
  	}

	fclose($file);
}

initForme();

?>
