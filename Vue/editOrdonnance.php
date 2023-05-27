<script type="text/javascript" src="./Javascript/api.js"></script>
<script type="text/javascript" src="./Javascript/ordonnance.js"></script>
<?php
//$_COOKIE['lancerRecherche']=false;
?>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
			<h4 class="title is-4">Modification ordonnance, !id ordonnance!, !pathologie!, !nom client!, !prenom client!</h4>
  			<form action="" method="POST" id="formOrdonnance">
  				
						  <p style="margin-left:833px;">
						   	<b>Date d'émission</b>
						  </p>
					
  					<div class="field has-addons has-addons-right">
						  <p class="control">
						    <input class="input" type="date" id="dateEmission" name="dateEmission" style="width:256px;margin-left:0px;" disabled>
						  </p>
						</div>
  					<div class="field">
						  <p class="control">
						   	<b>Médecin</b>
						  </p>
						  <div>
						 <div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="medecin" onkeyup="alimenteSelectMedecin('selectMedecin','medecin')" value="le medecin">
						  </p>
						  <p class="control">
						    <span class="select">
						      <select id="selectMedecin" name="leMedecin" value="id medecin">
						      </select>
						    </span>
						  </p>
						</div>
					<div class="field">
					  <label class="label">Pathologie</label>
					  <div class="control">
					    <input class="input" type="text" name="pathologie" value="lib pahthologie">
					  </div>
					</div>
					<table class="table" id="tableOrdonnance">
					 <thead>
					    <tr>
					      <th><abbr>Médicament</abbr></th>
					      <th><abbr>Nombre de boîtes</abbr></th>
					      <th><a onclick="addRow()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABu0lEQVR4nO2WuUpDQRSGvyLaGDS22qoJWLgkvobLs6jR3qUVQ0pjfAcrjRF8CbfKrVVwS6oYOfAHBtS75V5UyA8HBu5/ljvnzPwDPfwzZIE14AS4AN5ktq4BRWAiicQFoA60A5oVmI8jcR9QBj4U+BHYA+a1GwMyWy8AFXHa8ikBqajJh4FTBXsHNoDBAH7G2QQazm5kovx5XQEe1IKwmAJuFOMM6A/jXJbjHTBCdJjvvWLtBnUqqH+27TN0j1m1o6W1L+qq2HoeF7YU046qJ7LOtAcZuM6x88MQ8CTuuBdxXSQ7asRYgGFf3FUvUk2khQQKWBL32It0LdJYAgV02nvpRXoVKe2T0M++Q1rfLMePeEmwgEF9e/Yq4EqkiQRakBPXlPNXh/DIi1QUqZJAAQfiLv/piwjJZ1uSGhe2g2x/B3mJUSOoeAQQt6bEaDqoU0kVm5SOdpF81JHjnTCOKacV9iCZi5Dc/vbWUcHQT7OMU0RDkmrD5Ich9bzp3P2hn2QdpPSSaSmYTXIVWNTFkpbldM6rzrS3tO2RH6UuJoHDEFdxLaYB/oJx6fmxrtRX2bmO2EoIJe3hb+AT+Ly4iyA1K5MAAAAASUVORK5CYII=">
					    </a>
					    </th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					  	<td>
					  		<div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="medoc1" onkeyup="alimenteSelectStock('selectMedoc1','medoc1')">
						  </p>
						  <p class="control">
						    <span class="select">
						      <select id="selectMedoc1" name="leMedoc1">
						      </select>
						    </span>
						  </p>
						</div>
					    </td>
					    <td>
					     	<input class="input" type="number" name="nombre1" min="0">
					    </td>
					    <td>
					    </td>
					    </tr>
					  </tbody>
					  </table>


					<div class="field">
					  <label class="label">Renouvellement (en mois)</label>
					  <div class="control">
					    <input class="input" type="number" name="renouvellement" min="0" max="12" value="6" style="width:175px;margin-left:10px;">
					  </div>
					</div>
					<div class="control">
				  <button class="button is-primary" name="valider" onclick="getNbRows()">Valider</button>
				</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>