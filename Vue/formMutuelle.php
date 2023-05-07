<script type="text/javascript" src="./Javascript/api.js"></script>
<?php
//$_COOKIE['lancerRecherche']=false;
?>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
			<h4 class="title is-4">Nouvelle mutuelle</h4>
  			<form action="" method="POST" id="formMutuelle">

  					<div class="field">
  						 <label class="label">Nom</label>
  						 <p class="control">
						  		<input class="input" type="number" id="nom" style="width:150px;margin-left:0px;">
						  </p>
						</div>
						<div class="field">
							 <label class="label">Mail</label>
						  <p class="control">
						    <input class="input" type="email" id="email" style="width:150px;margin-left:0px;">
						  </p>
						</div>
						<div class="field">
							 <label class="label">Téléphone</label>
						  <p class="control">
						   <input class="input" type="text" id="tel" style="width:150px;margin-left:0px;"> 
						  </p>
						</div>
						<div class="field has-addons has-addons-centered">
							<div class="control">
				  			<input class="button is-primary" type="submit" name="valider" value="Valider"/>
						</div>
					</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>