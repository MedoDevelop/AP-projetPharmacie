<?php
    include_once "bd.inc.php";

    function getAllMedicament(){
        $db = connexionPDO();
        $req = "SELECT m.idMedoc,m.libelle,m.stock,f.libelle as forme
                FROM medicament m
                JOIN posologie p ON m.idPoso=p.idPoso
                JOIN forme f ON p.idPoso=f.idForme
                ";
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

?>

?>