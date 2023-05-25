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
			$nomMed=explode(",",$data[1]);
			//if(!in_array($nomMed[0], $add)){//le médicament n'est pas liste noir -> ajout du médicament
	  			if(!empty($nomMed[0])){ //data n'est pas vide
	  			//print_r(selectIdForme($data[2]));
	  				addMedicament(selectIdForme($data[2])[0],$nomMed[0]);
	  			}
	  		//}
	  		array_push($add,$nomMed[0]);//data est ajouter a la liste "noir"
		}
  		
  	}

	fclose($file);
}

initMedoc();

?>
