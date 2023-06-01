<body>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
  	

    <!--Modal pour confirmation de suppression-->
    <div class="modal is-active" id="leModal">
      <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Suppression de l'ordonnance</p>
           <a href="?action=consultOrdo"><button class="delete" aria-label="close"></button></a>
          </header>
          <section class="modal-card-body">
            Êtes-vous sûr de vouloir supprimer cette ordonnance ?
          </section>
          <footer class="modal-card-foot">
            <form action="?action=deleteOrdo&ordonnance=<?= $idOrdo ?>" method="POST" name="supression" id="suppression">
              <input class="button is-danger" type="submit" name="supprimer" value="Supprimer" />
                &nbsp;&nbsp;&nbsp;&nbsp;<input class="button is-primary" type="submit" name="annuler" value="Annuler"/>
          </form>
           
          </footer>
      </div>
</div>
</div>
</div>
</body>