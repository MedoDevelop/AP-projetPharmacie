<?php 

    //Consultation on doit pouvoir désactiver l'ordonnnance, acceder a l'édition, 
    $lesOrdos = sendGETAssoc("http://api.test/ordonnance/all");

    include_once 'Vue/header.html';
    include_once 'Vue/consultOrdo.php';
    include_once 'Vue/footer.html';

?>