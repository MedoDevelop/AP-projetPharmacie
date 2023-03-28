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

    function getNewIDPosologie(){
        $db = connexionPDO();
        $req = "SELECT MAX(idPoso) FROM posologie";
        $idres = $db->query($req);
        $id = $idres->fetch();
        if($idres->rowCount() != 0){
            return $id[0] + 1;
        }else{
            return 1;
        }
    }

    function getNewIDMedoc(){
        $db = connexionPDO();
        $req = "SELECT MAX(idPoso) FROM medicament";
        $idres = $db->query($req);
        $id = $idres->fetch();
        if($idres->rowCount() != 0){
            return $id[0] + 1;
        }else{
            return 1;
        }
    }

    function addMedicament($libMedoc,$qteStock,$libPoso,$qteParJour,$idForme){
        $db = connexionPDO();
        $newIdPoso = getNewIDPosologie();
        $newIdMedoc = getNewIDMedoc();
        $req1 = "INSERT INTO posologie (idPoso,libelle,quantiteJour,idForme) VALUES (:id,:lib,:qtejour,:idforme);";
        $prepa = $db->prepare($req1);
        $prepa->bindValue(':id',$newIdPoso,PDO::PARAM_INT);
        $prepa->bindValue(':lib',$libPoso,PDO::PARAM_STR);
        $prepa->bindValue(':qtejour',$qteParJour,PDO::PARAM_INT);
        $prepa->bindValue(':idforme',$idForme,PDO::PARAM_INT);

        $req2 = "INSERT INTO medicament (idPoso,idMedoc,libelle,stock) VALUES (:id,:idM,:lib,:stock);";
        $prepa2 = $db->prepare($req2);
        $prepa2->bindValue(':id',$newIdPoso,PDO::PARAM_INT);
        $prepa2->bindValue(':idM',$newIdMedoc,PDO::PARAM_INT);
        $prepa2->bindValue(':lib',$libMedoc,PDO::PARAM_STR);
        $prepa2->bindValue(':stock',$qteStock,PDO::PARAM_INT);

        $prepa->execute();
        $prepa2->execute();
    }

    function addMedicamentSansStock($libMedoc,$libPoso,$qteParJour,$idForme){
        $db = connexionPDO();
        $qteStock = 0;
        $newIdPoso = getNewIDPosologie();
        $newIdMedoc = getNewIDMedoc();
        $req1 = "INSERT INTO posologie (idPoso,libelle,quantiteJour,idForme) VALUES (:id,:lib,:qtejour,:idforme);";
        $prepa = $db->prepare($req1);
        $prepa->bindValue(':id',$newIdPoso,PDO::PARAM_INT);
        $prepa->bindValue(':lib',$libPoso,PDO::PARAM_STR);
        $prepa->bindValue(':qtejour',$qteParJour,PDO::PARAM_INT);
        $prepa->bindValue(':idforme',$idForme,PDO::PARAM_INT);

        $req2 = "INSERT INTO medicament (idPoso,idMedoc,libelle,stock) VALUES (:id,:idM,:lib,:stock);";
        $prepa2 = $db->prepare($req2);
        $prepa2->bindValue(':id',$newIdPoso,PDO::PARAM_INT);
        $prepa2->bindValue(':idM',$newIdMedoc,PDO::PARAM_INT);
        $prepa2->bindValue(':lib',$libMedoc,PDO::PARAM_STR);
        $prepa2->bindValue(':stock',$qteStock,PDO::PARAM_INT);

        $prepa->execute();
        $prepa2->execute();
    }

    function getAllForme(){
        $req = "SELECT * FROM forme";
        $db = connexionPDO();
        $res = $db->query($req);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
?>