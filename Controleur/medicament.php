<?php    

function init(){
	$file=fopen("../ressources/CIS_bdpm.csv","r");
	

	while(!feof($file))
  	{
		$data=fgetcsv($file);

  		print_r($data);

  	}

	fclose($file);
}

init();

?>
