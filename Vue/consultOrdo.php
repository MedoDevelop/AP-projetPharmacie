<?php
    function genLineTableOrdonnance($idOrdo,$libPathologie,$idClient,$isActive){
        $client = sendGETAssoc("http://api.test/client/byid/$idClient");
        $cltNom = $client[0]['nom'];
        $cltPrenom = $client[0]['prenom'];
        if($isActive == 1){
            $res = "
			<tr>
                <td> $idOrdo </td>
                <td> $libPathologie </td>
                <td> $cltNom $cltPrenom </td>
                <td> <a href=\"?action=editOrdo&ordonnance=$idOrdo\"> <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA8UlEQVR4nO2UwQnCMBhG36F6dgF3EEHx4hCuo/QkuIFT1FZ7cBrBay+KI1QKXyGUQlNNCmI++A/9k+Y9khAICfGXCIiBuypWb5CMgAQoG7UbCn4S8AksgbW+b0PD5+qv+giUPSvR2VbwtAU+13fV37oWSAx41gGv51oL2MaEv4CF+jPgoX6qebgWGAFnl/A+AmMfcFsBb3AbgQqed1y4TPDIh8CmA3424IkPgb3GDy3wi3YI4yl2LnDV+FESNTw34DbrfCxQtDxITbg3ganGCu3EXneiCfcmMJHEt+v4+bGRIFCGI+DLS1g6qt8TCPmvvAHKrMYgnwGQjwAAAABJRU5ErkJggg==\"> <a/> </td>
                <td> <a href=\"?action=deleteOrdo&ordonnance=$idOrdo\"> <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII=\"><a/> </td>
                <td> <div class=\"active\"> </div> </td>
            </tr>
		";
        }else{
            $res = "
			<tr>
                <td> $idOrdo </td>
                <td> $libPathologie </td>
                <td> $cltNom $cltPrenom </td>
                <td> <a href=\"?action=editOrdo&ordonnance=$idOrdo\"> <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA8UlEQVR4nO2UwQnCMBhG36F6dgF3EEHx4hCuo/QkuIFT1FZ7cBrBay+KI1QKXyGUQlNNCmI++A/9k+Y9khAICfGXCIiBuypWb5CMgAQoG7UbCn4S8AksgbW+b0PD5+qv+giUPSvR2VbwtAU+13fV37oWSAx41gGv51oL2MaEv4CF+jPgoX6qebgWGAFnl/A+AmMfcFsBb3AbgQqed1y4TPDIh8CmA3424IkPgb3GDy3wi3YI4yl2LnDV+FESNTw34DbrfCxQtDxITbg3ganGCu3EXneiCfcmMJHEt+v4+bGRIFCGI+DLS1g6qt8TCPmvvAHKrMYgnwGQjwAAAABJRU5ErkJggg==\"> <a/> </td>
                <td> <a href=\"?action=deleteOrdo&ordonnance=$idOrdo\"> <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII=\"><a/> </td>
                <td> <div class=\"nactive\"> <div/> </td>
            </tr>
		";
        }
		return $res;
    }
?>
<style>
    div.nactive{
        width: 25px;
        height: 25px;
        border-radius: 100%;
        background-color: red;
    }

    div.active{
        width: 25px;
        height: 25px;
        border-radius: 100%;
        background-color: blue;
    }
</style>
<div class="box">
    <center>
    <table class="table">
    <thead>
        <tr>
            <th><abbr>Ordonnance n° </abbr></th>
            <th><abbr>Libelle pathologie</abbr></th>
            <th><abbr>client</abbr></th>
            <th><abbr></abbr></th>
            <th><abbr></abbr></th>
            <th><abbr></abbr></th>
            <th><abbr></abbr></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($lesOrdos as $ordo) {
                echo genLineTableOrdonnance($ordo['idOrdo'],$ordo['libPathologie'],$ordo['idClient'],$ordo['active']);
            }
        ?>
    </tbody>
    </table>
    </center>
</div>