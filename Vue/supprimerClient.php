<script type="text/javascript" src="./Javascript/client.js"></script>

<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
  	

    <!--Modal pour confirmation de suppression-->
    <div class="modal is-active" id="leModal">
      <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Suppression du client</p>
            <button class="delete" aria-label="close" onclick="closeModal()"></button>
          </header>
          <section class="modal-card-body">
            Êtes-vous sûr de vouloir supprimer ce client ?
          </section>
          <footer class="modal-card-foot">
            <form action="" method="POST" name="supression" id="suppression">
              <input class="button is-danger" type="submit" name="supprimer" value="Supprimer" />
          </form>
           &nbsp;&nbsp;&nbsp;&nbsp;<button class="button is-primary" onclick="closeModal()">Annuler</button>
          </footer>
      </div>
</div>
</div>
</div>
</body>