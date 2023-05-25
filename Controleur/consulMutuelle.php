<?php
include_once("./Modele/mutuelle.php");
$mutuelles=sendGet('http://api.test/mutuelle/all');
//$mutuelles=getAllMutuelle();

//print_r($mutuelles);


include_once("./Vue/header.html");
include_once("./Vue/consulMutuelle.php");
include_once("./Vue/footer.html");

?>
