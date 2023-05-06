<?php

    //il faut récupérré les données du graphique pour un medicament précis
    //L'abscisse va du mois actuel jusqu'au mois le plus loin où il est utilisé
    //L'ordonné correspond à au nombre de médicament nécéssaire pour chaque mois

    //Sera renseigneé :
    //La quantité actuelle en stock du médicament
    //La quantité manquante pour le mois actuelle
    //La quantité manquante pour toute la période

    if(isset($_GET["medicament"]) && !empty($_GET["medicament"])){
        $medocID = $_GET["medicament"];
    }else{
        //redirige vers le stock
        header("Location: index.php?action=stock");
    }

    include_once "Modele/graphique.php";

    $grafInfos = getGrafOfMedocID($medocID);
/*
    'id' => $id,
    'Forme' => $forme,
    'Libelle' => $lib,
    'StockActuel' => $stockActu,
    'BesoinActuel' => $besoinActu,
    'BesoinFinal' => $besoinFinal,
    'ManquantActuel' => $manquantActuel,
    'ManquantFinal' => $manquantFinal,
    'EvolutionStock' => $evolStock
*/
    $stats = getStatMedicament($medocID);

    $mois = array();
    $qtePerMois = array();

    foreach($grafInfos as $line){
        array_push($mois,$line['dateDeb']);
        array_push($qtePerMois,$line['sumQteNeed']);
    }

    $jsonMois = json_encode($mois);
    $jsonQte = json_encode($qtePerMois);
    $jsonEvoStock = json_encode($stats['EvolutionStock']);

    include_once "Vue/header.html";
    include_once "Vue/graf.php";
    include_once "Vue/footer.html";

?>