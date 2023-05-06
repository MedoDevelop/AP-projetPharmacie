<body>
    <section>
        <form action="index.php=newmed" method="post">
            <p><label for="libMedoc">Libelle du médicament</label><input id="libMedoc" name="libMedoc" type="text" required/></p>
            <p><label for="nbPerDay">Nombre de prise par 24h</label><input id="nbPerDay" name="nbPerDay" type="number" required/></p>
            <p>
                <label for="forme">Type de principe actif</label>
                
                <select name="forme" id="forme">
                <?php
                    foreach($allForme as $forme){
                        $id = $forme['idForme'];
                        $libelle = $forme['libelle'];
                        echo "<option value=\"$id\">$libelle</option>";
                    }
                ?>
                </select>
            </p>
            <p><input name="ajoutMed" type="submit" value="Ajouter le médicament"/></p>
        </form>
    </section>
</body>