<?php
    include_once "Modele/bd.inc.php";
    function getGrafOfMedocID($id){ //Renvoie toute les données nécessaire pour élaborer le graphique de ce médicament (16 ou 30 pour tester)
        $bd = connexionPDO();
        $req = "SELECT DATE_FORMAT(ordo.dateDebut,'%Y-%m') AS dateDeb, SUM(av.nbrBoites) AS sumQteNeed
                FROM medicament med
                JOIN avoir av ON med.idMedoc=av.idMedoc
                JOIN ordonnance ordo ON ordo.idOrdo=av.idOrdo AND ordo.numMois=av.numMois
                WHERE DATE_FORMAT(ordo.dateDebut,'%Y-%m') >= DATE_FORMAT(NOW(),'%Y-%m')
                AND ordo.active=1  
                AND av.remis=0
                AND med.idMedoc=?
                GROUP BY DATE_FORMAT(ordo.dateDebut,'%Y-%m')
                ORDER BY dateDeb;";  
                //MONTH(ordo.dateEmission) >= MONTH(NOW()) -> les ordonnances à partir du mois actuel
                //ordo.active -> Si l'ordonnance est désactiver il faut l'ignorer
                //av.remis -> Si le médicament est remis, ce n'est pas nécéssaires de le compter
        $query = $bd->prepare($req);
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getStatMedicament($id){
        //Retourne un table key valeur
        // 'id', Contien le id du médicament
        // 'Forme', Contient le libelle de la forme du médicament
        // 'Libelle', Contient le libelle du médicament
        // 'StockActuel', La quantité du médicament id en stock
        // 'BesoinActuel' , La quantité de médicament nécessaire pour le mois actuel
        // 'BesoinFinal', La quantité nessaire pour toute la période (de mtn, jsuqu'a la fin du graf)
        // 'ManquantActuel', La quantité manquante à acheté pour ce mois-ci (0 si stockactu superieur a besoinactu)
        // 'ManquantFinal', La quantité manquante à achté pour toute la péride
        $dataset = getGrafOfMedocID($id);
        $bd = connexionPDO();
        $req = "SELECT f.libelle as forme,idMedoc as id,m.libelle as libelle,stock
                FROM medicament m
                JOIN forme f ON m.idForme=f.idForme
                WHERE idMedoc=?";
        $query = $bd->prepare($req);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($query->rowCount() == 0){
            return false;
        }
        $id = $result['id'];
        $forme = $result['forme'];
        $lib = $result['libelle'];
        $stockActu = $result['stock'];
        if(sizeof($dataset)!=0){
            $besoinActu = $dataset[0]['sumQteNeed'];
        }else{
            $besoinActu = 0;
        }
        $besoinFinal = 0;
        $manquantActuel = 0;
        if($stockActu < $besoinActu){
            $manquantActuel = $besoinActu-$stockActu;
        }
        
        $evolStock = array();
        $qte = $stockActu;
        foreach ($dataset as $line) {
            $sumNeed = $line['sumQteNeed'];
            $besoinFinal += $sumNeed;
            if($qte >= $sumNeed){
                array_push($evolStock,$qte);
                $qte -= $sumNeed;
            }else{
                array_push($evolStock,$qte);
                $qte = 0;
            }
        }

        $manquantFinal = 0;
        if($stockActu < $besoinFinal){
            $manquantFinal = $besoinFinal-$stockActu;
        }

        $stats = [
            'id' => $id,
            'Forme' => $forme,
            'Libelle' => $lib,
            'StockActuel' => $stockActu,
            'BesoinActuel' => $besoinActu,
            'BesoinFinal' => $besoinFinal,
            'ManquantActuel' => $manquantActuel,
            'ManquantFinal' => $manquantFinal,
            'EvolutionStock' => $evolStock
        ];
        return $stats;
    }

?>