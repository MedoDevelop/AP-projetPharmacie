<?php
include_once("./Modele/medecin.php");
include_once("./Modele/ordonnance.php");
include_once("./Vue/header.html");
include_once("./Vue/formOrdonnance.php");
include_once("./Vue/footer.html");

if(isset($_POST['valider'])){
	if(isset($_COOKIE['lignesMedoc'])){
		$dateEmission=$_POST['dateEmission'];
		$medecin=$_POST['leMedecin'];
		$path=$_POST['pathologie'];
		$client=$_POST['leClient'];
		$renouvellement=$_POST['renouvellement'];

		$data['idOrdo']=random_int(1,90000000);
		$data['libPathologie']=$path;
		$data['duree']=$renouvellement;
		$data['active']=true;
		$data['dateEmission']=$dateEmission;
		$data['idClient']=$client;
		$data['idMedecin']=$medecin;

		$data2['idOrdo']=$data['idOrdo'];

		for ($i=1;$i<=$renouvellement;$i++) {
			$dateDebut=setDateDebut($i-1);
			print_r($dateDebut);
			$data['dateDebut']=$dateDebut[0];
			$data['numMois']=$i;
			sendPost('http://api.test/ordonnance/create',$data);
		}

		for($j=1;$j<=$_COOKIE['lignesMedoc'];$j++){
			${'medoc'.$j}=$_POST["leMedoc$j"];
			${'nombre'.$j}=$_POST["nombre$j"];

			$data2['idMedoc']=${'medoc'.$j};
			$data2['nbrBoites']=${'nombre'.$j};

			for($k=1;$k<=$renouvellement;$k++) { 
				$data2['numMois']=$k;
				sendPost('http://api.test/avoir/add',$data2);
			}
		}

		echo('<p class="subtitle is-4" align="center" style="color : green"><b>L\'ordonnance a été enregistrée avec succès, pour voir les changements <a href="">cliquez ici</a></b></p>');

	}
}

?>
