<?php
	function genLinetableMedoc($libMedoc,$nbBoite){
		$res = "
			<tr>
			<td>
				<input class=\"input\" style=\"width:400px\" type=\"text\" id=\"medoc1\" value=\"$libMedoc\" disabled>
			</td>
			<td>
				<input class=\"input\" type=\"number\" name=\"nombre1\" min=\"0\" value=\"$nbBoite\" disabled>
			</td>
			</tr>
		";
		return $res;
	}
?>

<script type="text/javascript" src="./Javascript/ordonnanceEdit.js"></script>
<?php
//$_COOKIE['lancerRecherche']=false;
?>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
			<h4 class="title is-4">Edition de l'ordonnance: <?= $ordo[0]['idOrdo'].'; Pathologie: '.$ordo[0]['libPathologie'].'; client: '.$client[0]['nom'].' '.$client[0]['prenom'] ?></h4>

  				
						  <p style="margin-left:70%;">
						   	<b>Date d'émission</b>
						  </p>
					
  					<div class="field has-addons has-addons-right">
						  <p class="control">
						    <input class="input" type="date" id="dateEmission" name="dateEmission" style="width:256px;margin-left:0px;" value="<?= $ordo[0]["dateEmission"] ?>" disabled>
						  </p>
						</div>
  					<div class="field">
						  <p class="control">
						   	<b>Médecin</b>
						  </p>
						  <div>
						 <div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="medecin" onkeyup="alimenteSelectMedecin('selectMedecin','medecin')" value="<?= $medecin[0]['nom'].' '.$medecin[0]['prenom'] ?>" disabled>
						  </p>
						</div>
					<label class="label">Pathologie</label>

					<form action="index.php?action=modifPathologie&ordonnance=<?= $idOrdo ?>" method="post">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" name="libPathologie" value="<?= $ordo[0]['libPathologie'] ?>">
					  	</div>
						<div class="control">
					    <input type="submit" class="button is-primary" name="Modifier" value="Modifier">
						</div>
					
					</div>
					</form>
					<br/>
					<div class="field">
					  <label class="label">Durer de renouvellement (en mois)</label>
					  <div class="control">
					    <input class="input" type="number" name="renouvellement" min="0" max="12" value="6" style="width:175px;margin-left:10px;" disabled>
					  </div>
					</div>

					<table class="table" id="tableOrdonnance">
					 <thead>
					    <tr>
					      <th><abbr>Médicament</abbr></th>
					      <th><abbr>Nombre de boîtes</abbr></th>
					      </a>
					    </th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
							foreach ($medocs as $medoc) {
								echo genLinetableMedoc($medoc['libMedoc'],$medoc['nbrBoites']);
							}
						?>
					  </tbody>
					  </table>
					<div class="control">
				</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>