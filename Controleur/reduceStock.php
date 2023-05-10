<?php
    if((isset($_GET['medicament']) && !empty($_GET['medicament'])) && (isset($_POST['nbReduce']) && !empty($_POST['nbReduce']))){
        sendPUT('http://api.test/stock/reduce',['idMedoc' => $_GET['medicament'],'quantite' => $_POST['nbReduce']]);
        header('Location: index.php?action=graf&medicament='.$_GET['medicament']); //redirige vers la page de graf du medicament concerncé (ou il se trouvait)
    }else{
        if((isset($_GET['medicament']) && !empty($_GET['medicament']))){
            header('Location: index.php?action=graf&medicament='.$_GET['medicament']); //redirige vers la page de graf du medicament concerncé (ou il se trouvait)
        }else{
            header('Location: index.php'); //redirige vers l'acceuil
        }
    }
?>