<?php

    if((isset($_GET['medicament']) && !empty($_GET['medicament'])) && (isset($_POST['nbAdd']) && !empty($_POST['nbAdd']))){
        sendPUT('http://api.test/stock/add',['idMedoc' => $_GET['medicament'],'quantite' => $_POST['nbAdd']]);
        header('Location: index.php?action=graf&medicament='.$_GET['medicament']); //redirige vers la page de graf du medicament concerncé (ou il se trouvait)
    }else{
        if((isset($_GET['medicament']) && !empty($_GET['medicament']))){
            header('Location: index.php?action=graf&medicament='.$_GET['medicament']); //redirige vers la page de graf du medicament concerncé (ou il se trouvait)
        }else{
            header('Location: index.php'); //redirige vers l'acceuil
        }
    }

?>