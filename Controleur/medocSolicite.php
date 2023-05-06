<?php

$medocJson = file_get_contents("http://api.test/stock/allinordo");
$medoc = json_decode($medocJson,true);


include_once 'Vue/header.html';
include_once 'Vue/medocSolicite.php';
include_once 'Vue/footer.html';

?>
