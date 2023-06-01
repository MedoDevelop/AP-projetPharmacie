<?php
	$cptMedoc = 0; //nbMedoc designe uniquement les medicament qui n'ont pas été remis pas tous
	function genLinetableMedoc($libMedoc,$nbBoite,$estRemis,$idMedoc){
		global $cptMedoc;
		if($estRemis == 1){
			$res = "
			<tr>
			<td>
				<input class=\"input\" style=\"width:400px\" type=\"text\" id=\"medoc1\" value=\"$libMedoc\" disabled>
			</td>
			<td>
				<input class=\"input\" type=\"number\" name=\"nombre1\" min=\"0\" value=\"$nbBoite\" disabled>
			</td>
			<td>
				<center>
				<input class\"checkbox\" type=\"checkbox\" checked disabled/>
				</center>
			</td>
			</tr>
		";
		}else{
			$res = "
			<tr>
			<td>
				<input class=\"input\" style=\"width:400px\" type=\"text\" id=\"medoc1\" value=\"$libMedoc\" disabled/>
				<input type=\"hidden\" name=\"medoc$cptMedoc\" value=$idMedoc/>
			</td>
			<td>
				<input class=\"input\" type=\"number\" name=\"nombre1\" min=\"0\" value=\"$nbBoite\" disabled/>
			</td>
			<td>
				<center>
				<input class\"checkbox\" name=\"check$cptMedoc\" type=\"checkbox\"/>
				</center>
			</td>
			</tr>
		";
			$cptMedoc = $cptMedoc + 1;
		}
		
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
					    <input class="input" type="number" name="renouvellement" min="0" max="12" value="<?= $ordo[0]["duree"] ?>" style="width:175px;margin-left:10px;" disabled>
					  </div>
					</div>
					<form action="index.php?action=valideMedoc" method="post">
					<input type="hidden" name="nbMedoc" value="<?= $nbMedoc ?>"/>
					<input type="hidden" name="idOrdo" value="<?= $idOrdo ?>"/>
					<input type="hidden" name="numMois" value="<?= $numMois ?>"/>
					<table class="table" id="tableOrdonnance">
					 <thead>
					    <tr>
					      <th><abbr>Médicament</abbr></th>
					      <th><abbr>Nombre de boîtes</abbr></th>
							<th><abbr>Remis O/N</abbr></th>
					      </a>
					    </th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
							foreach ($medocs as $medoc) {
								echo genLinetableMedoc($medoc['libMedoc'],$medoc['nbrBoites'],$medoc['remis'],$medoc['idMedoc']);
							}
						?>
					  </tbody>
					  </table>
						<input style="float: right;" type="submit" class="button is-primary" value="Valider la remise"/>
						</form>
						<a href="?action=deleteOrdo&ordonnance=<?= $idOrdo ?>" style="float: left;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII="></a>
					<div class="control">
				</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>