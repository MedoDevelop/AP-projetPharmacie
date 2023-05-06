<?php    
include_once("../Modele/forme.php");
include_once("../Modele/medicament.php");

function initMedoc(){
	//Ouverture du fichier CSV
	$file=fopen("../ressources/CIS_bdpm.csv","r");

	//Initialisation du tableau
	$add = 	array();

	//Lecture du fichier CSV
	while(!feof($file))
  	{
		$data=fgetcsv($file);//Ligne du fichier
		if(!empty($data)){
			if(!in_array($data[1], $add)){//data n'est pas liste noir -> ajout du data
	  			if(!empty($data[1])){ //data n'est pas vide
	  			//print_r(selectIdForme($data[2]));
	  				addMedicament(selectIdForme($data[2])[0],$data[1]);
	  			}
	  		}
	  		array_push($add, $data[1]);//data est ajouter a la liste "noir"
		}
  		
  	}

	fclose($file);
}

initMedoc();

?>
