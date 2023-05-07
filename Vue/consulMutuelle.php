<script type="text/javascript" src="./Javascript/api.js"></script>

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
			foreach($mutuelle as $uneMutuelle){
				echo('<tr><td>'.$uneMutuelle['nom'].'</td><td>'.$uneMutuelle['mail'].'</td><td>'.$uneMutuelle['mail'].'</td><td><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA8UlEQVR4nO2UwQnCMBhG36F6dgF3EEHx4hCuo/QkuIFT1FZ7cBrBay+KI1QKXyGUQlNNCmI++A/9k+Y9khAICfGXCIiBuypWb5CMgAQoG7UbCn4S8AksgbW+b0PD5+qv+giUPSvR2VbwtAU+13fV37oWSAx41gGv51oL2MaEv4CF+jPgoX6qebgWGAFnl/A+AmMfcFsBb3AbgQqed1y4TPDIh8CmA3424IkPgb3GDy3wi3YI4yl2LnDV+FESNTw34DbrfCxQtDxITbg3ganGCu3EXneiCfcmMJHEt+v4+bGRIFCGI+DLS1g6qt8TCPmvvAHKrMYgnwGQjwAAAABJRU5ErkJggg=="></a></td><td><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII="></a></td></tr>');
			}
		?>
    </tr>
  </tbody>
</table>
</div>
	</div>
</div>
</body>