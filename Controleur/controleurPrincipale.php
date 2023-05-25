<?php

function controleurPrincipal($action) {
    
    $lesActions = array();

    $lesActions["stock"] = "stock.php";
    $lesActions["newmed"] = "newMedoc.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["stock"] = "stock.php";
    $lesActions["ajoutOrdonnance"] = "ajoutOrdonnance.php";
    $lesActions["ajoutClient"] = "ajoutClient.php";
    $lesActions["consulMutuelle"] = "consulMutuelle.php";
    $lesActions["modifierMutuelle"] = "modifierMutuelle.php";
    $lesActions["ajoutMutuelle"] = "ajoutMutuelle.php";
    $lesActions["graf"] = "graf.php";
    $lesActions["addStock"] = "addStock.php";
    $lesActions["reduceStock"] = "reduceStock.php";
    $lesActions["medocSolicite"] = "medocSolicite.php";
    $lesActions["defaut"] ="accueil.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

//Fonction API
    function sendDelete($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }


    function sendPUT($url,$data){
        //$data = array('key' => 'value');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function sendPOST($url,$data){
        //$data = array('key' => 'value');
        $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true
        );
        $curl = curl_init();
        curl_setopt_array($curl, $options);
        //echo $response;
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


?>