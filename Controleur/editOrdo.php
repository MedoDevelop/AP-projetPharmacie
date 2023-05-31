<?php
    //controlleur de la edition d'ordonance

    if(isset($_GET['ordonnance']) && !empty($_GET['ordonnance'])){
        $idOrdo = $_GET['ordonnance'];
    }else{
        header("Location: index.php");
    }

    //Recupération des informations de l'ordonnance
    //Il faut : 
    //info client, info medecin, lib pathologie, nombre de mois, liste des medicament et leur quantité.

    //l'ordonnance
    $ordo = sendGETAssoc("http://api.test/ordonnance/byid/$idOrdo");//sendGET("http://api.test/ordonance/medocofordo/$idOrdo");
    
    //Le client de l'ordonnance
    $idClient = $ordo[0]["idClient"];
    $client = sendGETAssoc("http://api.test/client/byid/$idClient");

    //Le medecin
    $idMedecin = $ordo[0]["idMedecin"];
    $medecin = sendGETAssoc("http://api.test/medecin/byid/$idMedecin");

    $medocs = sendGETAssoc("http://api.test/ordonnance/medocofordomonth/$idOrdo");
    $nbMedoc = 0; //designe le nombre de medicament nn remis
    $numMois = $medocs[0]['numMois'];
    foreach($medocs as $medoc){
        if($medoc['remis'] == 0){
            $nbMedoc = $nbMedoc + 1;
        }    
    }
    
    include_once 'Vue/header.html';
    include_once 'Vue/editOrdonnance.php';
    include_once 'Vue/footer.html';

?>