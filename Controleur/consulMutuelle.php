<?php
include_once("./Modele/mutuelle.php");

$_COOKIE['mutuelle']="";
$mutuelle=getAllMutuelle();

include_once("./Vue/header.html");
include_once("./Vue/consulMutuelle.php");
include_once("./Vue/footer.html");

?>
