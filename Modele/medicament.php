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

    function addMedicament(){
        $db = connexionPDO();
        $req = "SEL"
    }
?>