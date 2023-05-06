<script type="text/javascript" src="./Javascript/api.js"></script>
<?php
//$_COOKIE['lancerRecherche']=false;
?>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
		<div class="box">
  			<form action="" method="POST" id="formOrdonnance">
  					
  					<div class="field">
						  <p class="control">
						   	<b>Médecin</b>
						  </p>
						  <div>
						 <div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="medecin" onkeyup="alimenteSelectMedecin('selectMedecin','medecin')">
						  </p>
						  <p class="control">
						    <span class="select">
						      <select id="selectMedecin">
						      </select>
						    </span>
						  </p>
						</div>
					<div class="field">
					  <label class="label">Pathologie</label>
					  <div class="control">
					    <input class="input" type="text">
					  </div>
					</div>

					<div class="field has-addons">
						  <p class="control">
						   	<b>Client</b>
						  </p>
						  <p class="control">
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Client inexistant ? cliquez ici</a>
						  </p>
					</div>
					<div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="client" onkeyup="alimenteSelectClient('selectClient','client')">
						  </p>
						  <p class="control">
						    <span class="select">
						      <select id="selectClient">
						      </select>
						    </span>
						  </p>
						</div>

					<table class="table">
					 <thead>
					    <tr>
					      <th><abbr>Médicament</abbr></th>
					      <th><abbr>Nombre de boîtes</abbr></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					  	<td>
					  		<div class="field has-addons">
						  <p class="control">
						    <input class="input" type="text" id="medoc" onkeyup="alimenteSelectStock('selectMedoc','medoc')">
						  </p>
						  <p class="control">
						    <span class="select">
						      <select id="selectMedoc">
						      </select>
						    </span>
						  </p>
						</div>
					    </td>
					    <td>
					     	<input class="input" type="number">
					    </td>
					    <td>
					    <a><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADWElEQVR4nO2ay08UQRDGf0Zk12BEFhCPcjQY9Z9QQVGBG4o3DV5Egl59nNGTCQl/hwYJJGoQ3w/Ui4LISeVgxJsLBM2ait8knbiz7M727s4SvmSyj66prpqurq7+emATGxcpoAu4CYwBs8BPYFWXff+oNpM5BTQQEySBs8Ak8AfIFHj9BiaAPiBRCQe2A5eBRceoFeABcFUjs09PfJuuBv1nbdeAh7onuP8bMKSHUxYcBxYcA14B54D6CLp2AeeB146+z0AHJYQ9qVGnwzfAEY/624G3jv6RUozOHhluHfwCLgJbfXfCP52XgLQz2i2+lLdquDPKOvspPQ4Ac+pzXjYUhWZH4UugifKhAXisvhcUFZGQdMLpKVBH+VEHPHfCLNKcGXXCyRa7SqHRiQpLAAWn2GBil2NO5DNn0rLJslvei12wTlh2igsGncmfV4hdcdaJUqTYqKgB3sk2cyonEioVTPgw8cMx2ba43qj0ORkijtjiZNLTuQQnJWS1ky+8AJ551NcvG8fDBFIqq1ciFoBhCGonnwvlKrAWZme3OryPX/h2xDAlnSfIgltqtP1E3B25IZ3D2RrH1HiyChzpls472Ro/qdF2cXF3pE06jRf4D0tqTFWBI03S+T1b46oaayMono5APASX3VsoEg5PEBtHHvl2ZKmKQqs5V2htmMk+pkZjAOPuSE+u9BssiEaeVfWC2KVGYwurpUTpDCvGgqLRGMC4OpJyisadYUIT6tRoTF+Yjphiw3BBNt4LlQDOSMi42LhurGZkY+96C81XCR4lfuiUbV/yOYYYkvBMDMmH97JtIJ8bkg7Xa4RyXDAkm+YKORTq0E1pkWOVxiFgWTYVfJQx4jwBoy0rhWaRcmbL7SgKkqKFMiKSK0Fi7xALk9FnopinMescK9jvciEFPHGO44o+8Gl1htbC7CDlmRPz6tOq8r2+FLc4YZYW92rp0DdqlJ2WnXDa7buTpJMAMiKUOzyu2HaUEawTwcQu6dl7uzPsAWvfH/EthpRqp6DsyCiUfJ4Wrzs6g045k1FFauX1dfFObUrbtboadWjUI5kphycIyo6BSr0BkRArPq4tQKHEw5p2pr2VciAb6sXF2q7trs4efzgv1dj3D9qeDks2dD+xCaocfwGfzEwBMfegNQAAAABJRU5ErkJggg==">
					    </a>
					    </td>
					    </tr>
					  </tbody>
					  </table>


					<div class="field">
					  <label class="label">Renouvellement (en mois)</label>
					  <div class="control">
					    <input class="input" type="number" style="width:175px;margin-left:10px;">
					  </div>
					</div>
  			</form>
		</div>
	</div>
	</div>
</div>

</div>
</body>