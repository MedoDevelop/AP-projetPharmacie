<script type="text/javascript" src="./Javascript/mutuelle2.js"></script>
<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
    <div id="notif">
    </div>
    <div class="box">
      <h4 class="title is-4">Mutuelle N°<?php echo $mutuelle[0]->idMutuelle;?></h4>
        <form action="" method="POST" id="formMutuelle">

            <div class="field">
               <label class="label">Nom</label>
               <p class="control">
                  <input class="input" type="text" id="nom" name="nom" value="<?php echo $mutuelle[0]->nom;?>" style="width:300px;margin-left:0px;"/>
              </p>
            </div>
            <div class="field">
               <label class="label">Mail</label>
              <p class="control">
                <input class="input" type="email" id="email" name="email" value="<?php echo $mutuelle[0]->mail;?>" style="width:300px;margin-left:0px;"/>
              </p>
            </div>
            <div class="field">
               <label class="label">Téléphone</label>
              <p class="control">
               <input class="input" type="text" id="tel" name="tel" value="<?php echo $mutuelle[0]->tel;?>" style="width:300px;margin-left:0px;"/> 
              </p>
            </div>
            <div class="field has-addons has-addons-centered">
              <div class="control">
                <input class="button is-primary" type="submit" name="valider" value="Valider" onclick="verifySubmit('La mutuelle a bien été modifiée')"/>
                <?php
                if(verifyAssociationWithClient($mutuelle[0]->idMutuelle)<=0){
                  echo('<a href="?action=supprimerMutuelle" class="button is-danger">Supprimer</a>');
                }
                ?>
            </div>
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