<script type="text/javascript" src="./Javascript/client.js"></script>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
			<h4 class="title is-4">Nouveau client</h4>
  			<form action="" method="POST" id="formClient">

  					<div class="field is-grouped">
  						 <p class="control">
						    <b>Numéro de sécurité sociale</b> <input class="input" type="number" id="numSecu" name="numSecu" value="<?php echo $client[0]->numeroSecurite?>">
						  </p>
						</div>
						<div class="field is-grouped">
						  <p class="control">
						    <b>Nom</b> <input class="input" type="text" id="nom" name="nom" value="<?php echo $client[0]->nom?>">
						  </p>
						  <p class="control">
						   <b>Prénom</b><input class="input" type="text" id="prenom" name="prenom" value="<?php echo $client[0]->prenom?>"> 
						  </p>
						</div>
						 <div class="field">
						 	<label class="label">Date de naissance</label>
						  <p class="control">
						    <input class="input" type="date" id="dateNaiss" name="dateNaiss" style="width:150px;margin-left:0px;" value="<?php echo $client[0]->dateNaissance?>">
						  </p>
						</div>
					<div class="field is-grouped">
					  <p class="control">
					    <b>Mail</b><input class="input" type="email" name="email" id="email" value="<?php echo $client[0]->mail?>">
					  </p>
					  <p class="control">
					    <b>Téléphone</b><input class="input" type="text" name="tel" id="tel" value="<?php echo $client[0]->tel?>">
					  </p>
					</div>

					<div class="field has-addons">
						  <p class="control">
						   	<b>Mutuelle</b>
						  </p>
						  <p class="control">
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=ajoutMutuelle">Mutuelle inexistante ? cliquez ici</a>
						  </p>
					</div>
					<div class="field">
						  <p class="control">
						    <span class="select">
						      <select id="mutuelle" name="mutuelle">
						      	<?php
						      	
						      	foreach($mutuelles as $uneMutuelle){
						      		echo('<option value='.$uneMutuelle->idMutuelle.'>'.$uneMutuelle->nom.'</option>');
						      		
						      	}
						      	?>
						      </select>
						      <script>selectedValue(<?php echo $client[0]->idMutuelle;?>)</script>
						    </span>
						  </p>
						</div>
					<div class="field is-grouped">
					  <p class="control">
					    <b>Rue</b><input class="input" type="text" name="rue" id="rue" value="<?php echo $client[0]->adresseRue?>">
					  </p>
					  <p class="control">
					    <b>Ville</b><input class="input" type="text" name="ville" id="ville" value="<?php echo $client[0]->adresseVille?>">
					  </p>
					  <p class="control">
					    <b>Code Postal</b><input class="input" type="number" name="cp" id="cp" value="<?php echo $client[0]->adresseCP?>">
					  </p>
					</div>
					<div class="field has-addons">
					  	<input class="button is-primary" type="submit" name="valider" value="Valider" onclick="verifySubmit()"/>
						<?php
                if(verifyAssociationWithOrdo($client[0]->idClient)<=0){
                  echo('&nbsp;&nbsp;&nbsp;<a href="?action=supprimerClient" class="button is-danger">Supprimer</a>');
                }
                ?>
          </div>
				<div class="field">
					<p id="message"></p>
				</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>