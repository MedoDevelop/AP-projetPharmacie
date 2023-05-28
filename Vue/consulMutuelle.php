<script type="text/javascript" src="./Javascript/mutuelle2.js"></script>

<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
  <div class="box">
  	<h4 class="title is-4">Liste des mutuelles</h4>
  	<table class="table">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Mail</th>
      <th>Téléphone</th>
    </tr>
  </thead>
  <tbody>
    <?php
			foreach($mutuelles as $uneMutuelle){
        if(verifyAssociationWithClient($uneMutuelle->idMutuelle)>=1){
  				echo('<tr><td>'.$uneMutuelle->nom.'</td><td>'.$uneMutuelle->mail.'</td><td>'.$uneMutuelle->tel.'</td><td><a href="?action=modifierMutuelle" onclick="setIdMutuelle('.$uneMutuelle->idMutuelle.')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA8UlEQVR4nO2UwQnCMBhG36F6dgF3EEHx4hCuo/QkuIFT1FZ7cBrBay+KI1QKXyGUQlNNCmI++A/9k+Y9khAICfGXCIiBuypWb5CMgAQoG7UbCn4S8AksgbW+b0PD5+qv+giUPSvR2VbwtAU+13fV37oWSAx41gGv51oL2MaEv4CF+jPgoX6qebgWGAFnl/A+AmMfcFsBb3AbgQqed1y4TPDIh8CmA3424IkPgb3GDy3wi3YI4yl2LnDV+FESNTw34DbrfCxQtDxITbg3ganGCu3EXneiCfcmMJHEt+v4+bGRIFCGI+DLS1g6qt8TCPmvvAHKrMYgnwGQjwAAAABJRU5ErkJggg=="></a></td><td>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcElEQVR4nM2XS07DMBCGzb6a3zfgcQDUwhJRxA2AwnlK70XpgkcyLixpKk4AlA0tm6yCHAXVDWmTkNjtSLOyos/ze14RYtPtCThgoMdEAwYCJvqOHQgU0a0+U0CrFlgkxNYQuGRgrICoiMcXATr6239BFbCnAK8oMMMffWC3FHTYaBwp4L0C9Nc/feC0WKRSnjAQlgHw6rOQpWznysvApIZI0/CJB+xkQnUyVHzTPPhDZsIxcGULavjFn2jLlEwFHy2AfeDQATRKJG+aMvdcgRVRdw4mGqRuZRN8Y5bRq0OpAzPimUOpp/OIiaYOwV9mco3XIrUi6qcObUbcNyO+Xks5KaDlCuxJuZ9umYED8EvWSOzYBvvAWeZY1KPLFpSJ7sQy08Pa0iLw8Szl9lJwnOFStsuuPjnQ0JfyWJRY9t6cLnsp2e+rvGmuvKtMryt6cyhTMgyci7qMgabuOrrlJb8ws2SqjeKWS9Rd2C421X4AAH2zSuJKoToAAAAASUVORK5CYII="></td></tr>');
        }else{
          echo('<tr><td>'.$uneMutuelle->nom.'</td><td>'.$uneMutuelle->mail.'</td><td>'.$uneMutuelle->tel.'</td><td><a href="?action=modifierMutuelle" onclick="setIdMutuelle('.$uneMutuelle->idMutuelle.')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA8UlEQVR4nO2UwQnCMBhG36F6dgF3EEHx4hCuo/QkuIFT1FZ7cBrBay+KI1QKXyGUQlNNCmI++A/9k+Y9khAICfGXCIiBuypWb5CMgAQoG7UbCn4S8AksgbW+b0PD5+qv+giUPSvR2VbwtAU+13fV37oWSAx41gGv51oL2MaEv4CF+jPgoX6qebgWGAFnl/A+AmMfcFsBb3AbgQqed1y4TPDIh8CmA3424IkPgb3GDy3wi3YI4yl2LnDV+FESNTw34DbrfCxQtDxITbg3ganGCu3EXneiCfcmMJHEt+v4+bGRIFCGI+DLS1g6qt8TCPmvvAHKrMYgnwGQjwAAAABJRU5ErkJggg=="></a></td><td><a href="?action=supprimerMutuelle" onclick="setIdMutuelle('.$uneMutuelle->idMutuelle.')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII="></a></td></tr>');
        }
			}
		?>
    </tr>
  </tbody>
</table>
<strong>Légende</strong>
<table>
<tr><td><img style="margin-top : 10px;"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcElEQVR4nM2XS07DMBCGzb6a3zfgcQDUwhJRxA2AwnlK70XpgkcyLixpKk4AlA0tm6yCHAXVDWmTkNjtSLOyos/ze14RYtPtCThgoMdEAwYCJvqOHQgU0a0+U0CrFlgkxNYQuGRgrICoiMcXATr6239BFbCnAK8oMMMffWC3FHTYaBwp4L0C9Nc/feC0WKRSnjAQlgHw6rOQpWznysvApIZI0/CJB+xkQnUyVHzTPPhDZsIxcGULavjFn2jLlEwFHy2AfeDQATRKJG+aMvdcgRVRdw4mGqRuZRN8Y5bRq0OpAzPimUOpp/OIiaYOwV9mco3XIrUi6qcObUbcNyO+Xks5KaDlCuxJuZ9umYED8EvWSOzYBvvAWeZY1KPLFpSJ7sQy08Pa0iLw8Szl9lJwnOFStsuuPjnQ0JfyWJRY9t6cLnsp2e+rvGmuvKtMryt6cyhTMgyci7qMgabuOrrlJb8ws2SqjeKWS9Rd2C421X4AAH2zSuJKoToAAAAASUVORK5CYII="></td><td><p style="margin-top: 10px;margin-left: 10px">Mutuelles impossible à supprimer, lien avec un ou plusieurs clients</p></td></tr>
</table>



</div>
	</div>
</div>
</body>