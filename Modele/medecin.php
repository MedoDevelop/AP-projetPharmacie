<?php
    include_once "bd.inc.php";

    function getAllIdMedecin(){
        $db = connexionPDO();
        $req = "SELECT idMedecin
                FROM medecin";
        $query = $db->query($req);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function verifIfPhoneExist($telephone){
        $db = connexionPDO();
        $req = "SELECT *
                FROM medecin
                WHERE telephone=:telephone";
        $prepa = $db->prepare($req);
        $prepa->bindValue(':telephone',$telephone,PDO::PARAM_INT);
        $prepa->execute();
        $count=$prepa->rowCount();
        return $count;
    }

    function setTelephone($idMedecin){
        $tel=random_int(10000000,90000000);
        while(verifIfPhoneExist($tel)!=0){
            $tel=random_int(10000000,90000000);
        }
        
            $db = connexionPDO();
            $req = "UPDATE Medecin SET telephone=:telephone WHERE idMedecin=:idMedecin";
            $prepa = $db->prepare($req);
            $prepa->bindValue(':telephone',$tel,PDO::PARAM_INT);
            $prepa->bindValue(':idMedecin',$idMedecin,PDO::PARAM_INT);
            $prepa->execute();

        
    }

    function getAllMedecin(){
        $db = connexionPDO();
        $req = "SELECT idMedecin,nom,prenom
                FROM medecin
                ORDER BY nom;
                ";
        $query = $db->query($req);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    function addMedecin($nomMedecin,$prenomMedecin){
        $db = connexionPDO();
        $req = "INSERT INTO medecin (nom,prenom) VALUES (:nomMedecin,:prenomMedecin);";
        $prepa = $db->prepare($req);
        $prepa->bindValue(':nomMedecin',$nomMedecin,PDO::PARAM_STR);
        $prepa->bindValue(':prenomMedecin',$prenomMedecin,PDO::PARAM_STR);
        $prepa->execute();
    }

    function GetMedecinLike(string $val){
            $conn = connexionPDO();
            $req = "SELECT * FROM medecin
                    WHERE nom LIKE CONCAT('%', ?, '%')
                    OR prenom LIKE CONCAT('%', ?, '%')
                    OR CONCAT(nom,' ',prenom) LIKE CONCAT('%', ?, '%')
                    OR CONCAT(prenom,' ',nom) LIKE CONCAT('%', ?, '%')
                    LIMIT 20;";
            $prep = $conn->prepare($req);
            $prep->bindParam(1,$val,PDO::PARAM_STR);
            $prep->bindParam(2,$val,PDO::PARAM_STR);
            $prep->bindParam(3,$val,PDO::PARAM_STR);
            $prep->bindParam(4,$val,PDO::PARAM_STR);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_ASSOC);
        }

        function GetNbMedecinLike(string $val){
            $conn = connexionPDO();
            $req = "SELECT * FROM medecin
                    WHERE nom LIKE CONCAT('%', ?, '%')
                    OR prenom LIKE CONCAT('%', ?, '%')
                    OR CONCAT(nom,' ',prenom) LIKE CONCAT('%', ?, '%')
                    OR CONCAT(prenom,' ',nom) LIKE CONCAT('%', ?, '%')
                    LIMIT 20;";
            $prep = $conn->prepare($req);
            $prep->bindParam(1,$val,PDO::PARAM_STR);
            $prep->bindParam(2,$val,PDO::PARAM_STR);
            $prep->bindParam(3,$val,PDO::PARAM_STR);
            $prep->bindParam(4,$val,PDO::PARAM_STR);
            $prep->execute();
            return $prep->rowCount();
        }
?>