<?php
    include_once "bd.inc.php";

    function getAllMedicament(){
        $db = connexionPDO();
        $req = "SELECT m.idMedoc,m.libelle,m.stock,f.libelle as forme
                FROM medicament m
                JOIN forme f ON m.idForme=f.idForme LIMIT 150;";
        $query = $db->query($req);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function addMedicament($idForme,$libMedoc){
        $db = connexionPDO();
        $req = "INSERT INTO medicament (idForme,libelle,stock) VALUES (:idF,:lib,0);";
        $prepa = $db->prepare($req);
        $prepa->bindValue(':idF',$idForme,PDO::PARAM_INT);
        $prepa->bindValue(':lib',$libMedoc,PDO::PARAM_STR);
        $prepa->execute();
    }

    function getAllForme(){
        $req = "SELECT * FROM forme";
        $db = connexionPDO();
        $res = $db->query($req);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    function getMedicamentInOrdo(){
        //Retourne les médicaments qui figurent sur au moins une ordonance active
        //On retient leurs libelle la qutité en sotck 
        $req = "SELECT DISTINCT med.libelle,med.stock   
                FROM medicament med
                JOIN avoir av ON med.idMedoc=av.idMedoc
                JOIN ordonnance ordo ON ordo.idOrdo=av.idOrdo AND ordo.numMois=av.numMois
                JOIN forme f ON f.idForme=med.idMedoc 
                WHERE DATE_FORMAT(ordo.dateEmission,'%Y-%m') >= DATE_FORMAT(NOW(),'%Y-%m')
                AND ordo.active=1  
                AND av.remis=0;";  
        $db = connexionPDO();
        $query = $db->query($req);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

?>