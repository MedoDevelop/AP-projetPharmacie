<?php
    if(verifVar($_POST['idOrdo']) && verifVar($_POST['nbMedoc'])){
        $idOrdo = $_POST['idOrdo'];
        $nbMedoc = $_POST['nbMedoc'];
        $numMois = $_POST['numMois'];
        for($i=0;$i<$nbMedoc;$i++){
            if(verifVar($_POST["check$i"])){
                sendPUT("http://api.test/ordonnance/valideremise",['idOrdo' => $idOrdo,'numMois' => $numMois ,'idMedoc' => $_POST["medoc$i"]]);
            }
        }
        header("Location: index.php?action=editOrdo&ordonnance=$idOrdo");
    }else{
        header("Location: index.php");
    }
?>