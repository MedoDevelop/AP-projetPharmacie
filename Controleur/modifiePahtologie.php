<?php

    if(isset($_GET['ordonnance']) && !empty($_GET['ordonnance'])){
        $idOrdo = $_GET['ordonnance'];
    }else{
        header("Location: index.php");
    }

    if(isset($_POST['libPathologie']) && !empty($_POST['libPathologie'])){
        $pathologie = $_POST['libPathologie'];
    }else{
        header("Location: index.php");
    }

    //Mise a jour du libelle 
    $data = ['idOrdo' => $idOrdo, 'libPathologie' => $pathologie];
    sendPUT('http://api.test/ordonnance/updatePathologie',$data);

    //rediretion vers la page d'edition
    header("Location: index.php?action=editOrdo&ordonnance=$idOrdo");

?>