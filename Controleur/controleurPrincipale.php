<?php

function controleurPrincipal($action) {
    
    $lesActions = array();

    $lesActions["stock"] = "stock.php";
    $lesActions["newmed"] = "newMedoc.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["stock"] = "stock.php";
    $lesActions["ajoutOrdonnance"] = "ajoutOrdonnance.php";
    $lesActions["ajoutClient"] = "ajoutClient.php";
    $lesActions["consulClient"] = "consulClient.php";
    $lesActions["modifierClient"] = "modifierClient.php";
    $lesActions["supprimerClient"] = "supprimerClient.php";
    $lesActions["consulMutuelle"] = "consulMutuelle.php";
    $lesActions["modifierMutuelle"] = "modifierMutuelle.php";
    $lesActions["supprimerMutuelle"] = "supprimerMutuelle.php";
    $lesActions["ajoutMutuelle"] = "ajoutMutuelle.php";
    $lesActions["graf"] = "graf.php";
    $lesActions["consultOrdo"] = "consultOrdo.php";
    $lesActions["deleteOrdo"] = "deleteOrdo.php";
    $lesActions["modifPathologie"] = "modifiePahtologie.php";
    $lesActions["consultOrdo"] = "consultOrdo.php";
    $lesActions["editOrdo"] = "editOrdo.php";
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
        echo $response;
    }

    function sendPOST($url,$data){
        //$data = array('key' => 'value');
        $curl = curl_init();
        $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);
        echo $response;
        curl_close($curl);
        return $response;
    }

    function sendGET($url){
        $response = file_get_contents($url);
        return json_decode($response);
    }

    function sendGETAssoc($url){
        $response = file_get_contents($url);
        return json_decode($response,true);
    }

?>