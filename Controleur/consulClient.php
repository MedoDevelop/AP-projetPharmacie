<?php
include_once("./Modele/client.php");
$clients=sendGet('http://api.test/client/all');
include_once("./Vue/header.html");
include_once("./Vue/consulClient.php");
include_once("./Vue/footer.html");

?>
