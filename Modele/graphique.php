<?php

    function getGrafOfMedocID($id){ //Renvoie toute les données nécessaire pour élaborer le graphique de ce médicament
        $req = "SELECT MONTH(ordo.dateEmission) AS mois,YEAR(ordo.dateEmission) AS annee, SUM(med.qteStock) AS sumQteActu, SUM(av.nbrBoites) AS sumQteNeed
                FROM medicament med
                JOIN avoir av ON med.idMedoc=av.idMedoc
                JOIN ordonnance ordo ON ordo.idOrdo=av.idOrdo AND ordo.numMois=av.numMois
                WHERE MONTH(ordo.dateEmission) >= MONTH(NOW())
                AND ordo.active=true  
                AND av.remis=false
                AND med.idMedoc=?
                GROUP BY mois;";  
                //MONTH(ordo.dateEmission) >= MONTH(NOW()) -> les ordonnances à partir du mois actuel
                //ordo.active -> Si l'ordonnance est désactiver il faut l'ignorer
                //av.remis -> Si le médicament est remis, ce n'est pas nécéssaires de le compter 
    }

?>