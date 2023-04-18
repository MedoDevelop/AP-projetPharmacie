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
    }

    include_once "Vue/header.html";
    include_once "Vue/graf.html";
    include_once "Vue/footer.html";

?>