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
    $ordo = sendGET("http://api.test/ordonnance/byid/$idOrdo");//sendGET("http://api.test/ordonance/medocofordo/$idOrdo");
    
    //Le client de l'ordonnance
    $idClient = $ordo["idClient"];
    $client = sendGET("http://api.test/client/byid/$idClient");

    //Le medecin
    $idMedecin = $ordo["idMedecin"];
    $medecin = sendGET("http://api.test/medecin/byid/$idMedecin");

    include_once 'Vue/editOrdonnance.php';

?>