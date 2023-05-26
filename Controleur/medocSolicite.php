<?php


//$medocJson = file_get_contents("http://api.test/stock/allinordo");
$medocJson = file_get_contents("http://api.test/avoir/all");
$medoc = json_decode($medocJson,true);
$medoc = sendGET("http://api.test/stock/allinordo");

//echo $medocJson;

$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if($page < 1){
    $page = 1;
}

$nbPage = ceil(sizeof($medoc)/5);//On arrondie a l'entier superieur 2.4 -> 3, c'est le nombre page (avec 5 ligne max par pages).
if(!($page <= $nbPage)){
    $page = 1;
}

include_once 'Vue/header.html';
include_once 'Vue/medocSolicite.php';
include_once 'Vue/footer.html';

?>
