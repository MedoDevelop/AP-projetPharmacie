<?php

function controleurPrincipal($action) {
    $lesActions = array();
<<<<<<< HEAD
    $lesActions["stock"] = "stock.php";
    $lesActions["newmed"] = "newMedoc.php";
    $lesActions["defaut"] = "client.php";
=======

    $lesActions["defaut"] ="accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["stock"] = "stock.php";
     $lesActions["ajoutOrdonnance"] = "ajoutOrdonnance.php";
>>>>>>> c367cc9793fa7d8f5611273bcbc2fadf0024654f
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>