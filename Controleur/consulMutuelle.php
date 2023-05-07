<?php
include_once("./Modele/mutuelle.php");
$mutuelle=getAllMutuelle();
print_r($_COOKIE['mutuelle']);

include_once("./Vue/header.html");
include_once("./Vue/consulMutuelle.php");
include_once("./Vue/footer.html");

?>
