<?php

function controleurPrincipal($action) {
    $lesActions = array();
<<<<<<< HEAD
    $lesActions["defaut"] =;
=======
    $lesActions["stock"] = "stock.php";
    $lesActions["defaut"] = "client.php";
>>>>>>> d5007fdb8d81a22a800d81e1ec359dbc7af9e7bb
    

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>