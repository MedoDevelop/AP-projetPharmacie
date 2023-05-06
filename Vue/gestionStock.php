<body>
    <script type="text/javascript">
        // Définir l'URL de l'API à interroger  
        function alimenteSelect(idSelect,idSearch){
            let el = document.getElementById(idSelect);
            let search = document.getElementById(idSearch);
            let value = search.value;
            if(value.length > 2){
                value = value.replace(/ /g, "-");
                let url = "http://api.test/stock/like/"+value;
                fetch(url)
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data =>{
                    const dataObj = data
                    el.length = 0;
                    for (const key in dataObj) {
                        let newOption = document.createElement("option");
                        newOption.value = dataObj[key]['id'];
                        newOption.text = dataObj[key]['libelle'];
                        //console.log(dataObj[key]);
                        el.add(newOption);
                    }
                }) // Afficher les données dans la console
                .catch(error => console.error(error)); // Gérer les erreurs éventuelles
                
            }
        }

        function alimenteTabeleResult(idTable,idSearch){
            let tbody = document.querySelector("#"+idTable+" tbody");
            let value = document.getElementById(idSearch).value;
            tbody.innerHTML = "";
            if(value.length > 2){
                value = value.replace(/ /g, "-");
                let url = "http://api.test/stock/like/"+value;
                fetch(url)
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data =>{
                    const dataObj = data
                    for (const key in dataObj) {
                        let nouvelleLigne = tbody.insertRow();
                        let cellule1 = nouvelleLigne.insertCell();
                        let lien = document.createElement("a");
                        lien.href = "index.php?action=graf&medicament="+dataObj[key]['id']; // définit le href du lien
                        lien.textContent = dataObj[key]['libelle'];
                        lien.className = "box is-small";
                        lien.style.fontSize = "12px";
                        cellule1.appendChild(lien);
                    }
                }) // Afficher les données dans la console
                .catch(error => console.error(error)); // Gérer les erreurs éventuelles
                
            }
        }

        function updateqte(num,id){
            var el = document.getElementById("nvstock");
            el.setAttribute("value",num);
            var a = document.getElementById("graf");
            a.setAttribute("href","index.php?action=graf&medicament="+id);
        }   

        function setAction(idSelect,idA){
            let a = document.getElementById(idA);
            let el = document.getElementById(idSelect)
            let medocId = el.value;
            a.setAttribute("href","index.php?action=graf&medicament="+medocId);
        }
    </script>
    <style>
        .enligne{
            display: inline;
        }
    </style>
    <section id="GestionStock">
        <div class="columns is-gapless">
            <div class="column is-one-quarter"></div>
            <div class="column">
                <div class="box">
                    <h2>Recherche du médicament à consuler</h2>
                    <input class="input is-primary" type="text" name="search" id="search" onkeyup="alimenteSelect('result','search')"/>
                    <br/><br/>
                    <h2>Resultat de la recherche</h2>
                    <select class="select is-success" style="width: 100%" id="result" onclick="setAction('result','btnGraf')"></select>
                    <br/><br/>
                    <a id="btnGraf" href=""><button class="button is-primary">Consulter le médiciament sélectionné</button></a>
                    <!--<table id="result" class="table" style="width: 100%;padding: 50px;">
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                    </table>-->
                </div>
            </div>
            <div class="column is-one-quarter"></div>
        </div>
    </section>
    <br/><br/>
    <br/><br/><br/><br/>
    <br/><br/><br/><br/>
    <br/><br/>
</body>