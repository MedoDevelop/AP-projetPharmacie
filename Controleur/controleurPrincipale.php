<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["stock"] = "stock.php";
    $lesActions["newmed"] = "newMedoc.php";
    $lesActions["defaut"] = "client.php";
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>