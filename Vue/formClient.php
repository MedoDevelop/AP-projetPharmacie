<script type="text/javascript" src="./Javascript/api.js"></script>
<?php
//$_COOKIE['lancerRecherche']=false;
?>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
			<h4 class="title is-4">Nouveau client</h4>
  			<form action="" method="POST" id="formClient">

  					<div class="field is-grouped">
  						 <p class="control">
						    <b>Numéro de sécurité sociale</b> <input class="input" type="number" id="numSecu">
						  </p>
						</div>
						<div class="field is-grouped">
						  <p class="control">
						    <b>Nom</b> <input class="input" type="text" id="nom">
						  </p>
						  <p class="control">
						   <b>Prénom</b><input class="input" type="text" id="prenom"> 
						  </p>
						</div>
						 <div class="field">
						 	<label class="label">Date de naissance</label>
						  <p class="control">
						    <input class="input" type="date" id="dateNaiss" style="width:150px;margin-left:0px;">
						  </p>
						</div>
					<div class="field is-grouped">
					  <p class="control">
					    <b>Mail</b><input class="input" type="email" id="email">
					  </p>
					  <p class="control">
					    <b>Téléphone</b><input class="input" type="text" id="tel">
					  </p>
					</div>

					<div class="field has-addons">
						  <p class="control">
						   	<b>Mutuelle</b>
						  </p>
						  <p class="control">
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Mutuelle inexistante ? cliquez ici</a>
						  </p>
					</div>
					<div class="field">
						  <p class="control">
						    <span class="select">
						      <select id="selectMutuelle">
						      	<?php
						      	
						      	foreach($mutuelle as $uneMutuelle){
						      		echo('<option value='.$uneMutuelle['idMutuelle'].'>'.$uneMutuelle['nom'].'</option>');
						      		
						      	}
						      	?>
						      </select>
						    </span>
						  </p>
						</div>
					<div class="field is-grouped">
					  <p class="control">
					    <b>Rue</b><input class="input" type="text">
					  </p>
					  <p class="control">
					    <b>Ville</b><input class="input" type="text">
					  </p>
					  <p class="control">
					    <b>Code Postal</b><input class="input" type="number">
					  </p>
					</div>
					<div class="control">
				  <input class="button is-primary" type="submit" name="valider" value="Valider"/>
				</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>