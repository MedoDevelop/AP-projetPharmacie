<?php

    include_once 'Modele/medicament.php';

    if(isset($_POST["ajoutMed"])){
        $libMed = $_POST['libMedoc'];
        $formeid = $_POST['forme'];
        $poso = $_POST['nbPerDay'];
    }

    $allForme = getAllForme();

    include_once 'Vue/header.html';
    include_once 'Vue/ajoutMedicament.php';
    include_once 'Vue/footer.html';

?>