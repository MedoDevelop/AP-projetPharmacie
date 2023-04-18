<?php

function controleurPrincipal($action) {
    
    $lesActions = array();

    $lesActions["stock"] = "stock.php";
    $lesActions["newmed"] = "newMedoc.php";
    $lesActions["defaut"] = "client.php";


    $lesActions["defaut"] ="accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["stock"] = "stock.php";
    $lesActions["ajoutOrdonnance"] = "ajoutOrdonnance.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>