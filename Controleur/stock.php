<?php
    
    include_once "Modele/medicament.php";

    $stock = getAllMedicament();
    //$stockJson = json_encode($stock);

    include_once "Vue/header.html";    
    include_once "Vue/gestionStock.php";
    include_once "Vue/footer.html";

?>
