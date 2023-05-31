<?php 

    if(isset($_GET["ordonnance"]) && !empty($_GET["ordonnance"])){
        $idOrdo = $_GET["ordonnance"];
        sendDelete("http://api.test/ordonnance/delete/$idOrdo");
        header("Location: ?action=consultOrdo");
    }else{
        header("Location: index.php");
    }
?>