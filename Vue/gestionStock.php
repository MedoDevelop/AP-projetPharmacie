
<body>
    <script type="text/javascript">
        function updateqte(num,id){
            var el = document.getElementById("nvstock");
            el.setAttribute("value",num);
            var a = document.getElementById("graf");
            a.setAttribute("href","index.php?action=graf&medicament="+id);
        }   
    </script>
    <style>
        .enligne{
            display: inline;
        }
    </style>
    <section id="GestionStock">
        <div class="box">
        <h1 class="title">&nbsp;&nbsp;&nbsp;&nbsp; Gestion des stocks </h1> <!-- Centrer -->
        <form action="index.php?action=stock" method="post"></form>
            <table class="table is-bordered is-striped" align="center" style="margin: 50px;">
                <tbody>
                    <tr>
                        <th><center>Libelle</center></th>
                        <th><center>Forme</center></th>
                        <th><center>Posologie (Doses par jour)</center></th>
                        <th><center>Quantité en stock</center></th>
                    </tr>
                    <tr>
                        <td>Paracetamol</td>
                        <td>Géllule</td>
                        <td>3</td>
                        <td>15</td>
                        <td><input type="radio" name="select" onclick="updateqte(15,1)" checked/></td>
                    </tr>
                        <tr>
                        <td>Doliprane</td>
                        <td>Comprimé</td>
                        <td>2</td>
                        <td>50</td>
                        <td><input type="radio" name="select" onclick="updateqte(50,2)"/></td>
                    </tr>
                        <tr>
                        <td>Kolitonol</td>
                        <td>Géllule</td>
                        <td>1</td>
                        <td>20</td>
                        <td><input type="radio" name="select" onclick="updateqte(20,3)"/></td>
                    </tr>
                </tbody>
            </table>
            &nbsp;&nbsp;<input class="input" style="width: 100px;" type="number" name="nvstock" id="nvstock" value="15"/>&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="Metre à jour le stock"/>
        </form>
            <a class="enligne" id="graf"><button class="button">Afficher le graphique</button></a>
        </div>
    </section>
</body>