<?php 
/*
    if(isset($_GET["ordonnance"]) && !empty($_GET["ordonnance"])){
        $idOrdo = $_GET["ordonnance"];
        include_once 'Vue/deleteOrdo.php';
        if(verifVar($_POST['supression'])){
            sendDelete("http://api.test/ordonnance/delete/$idOrdo");
        }else{
            header("Location: ?action=consultOrdo");
        }
        
    }else{
        header("Location: index.php");
    }
*/

    if(isset($_GET["ordonnance"])){
	    
        $idOrdo=$_GET["ordonnance"];
    }else{
        echo('<p align="center">Erreur aucune mutuelle sélectionnée</p>');
    }
    include_once("./Vue/header.html");	
    include_once("./Vue/deleteOrdo.php");

    if(isset($_POST['supprimer'])){
        sendDelete("http://api.test/ordonnance/delete/$idOrdo");
        header("Location: ?action=consultOrdo");
    }elseif(isset($_POST["annuler"])){
        header("Location: ?action=consultOrdo");
    }
?>