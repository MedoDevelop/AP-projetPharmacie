        // Définir l'URL de l'API à interroger  
        function alimenteSelectStock(idSelect,idSearch){
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

        function alimenteSelectMedecin(idSelect,idSearch){
            let el = document.getElementById(idSelect);
            let search = document.getElementById(idSearch);
            let value = search.value;
            el.length = 0;
            if(value.length > 2){
                value = value.replace(/ /g, "-");
                let url = "http://api.test/medecin/like/"+value;
                fetch(url)
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data =>{
                    const dataObj = data
                    for (const key in dataObj) {
                        let newOption = document.createElement("option");
                        newOption.value = dataObj[key]['idMedecin'];
                        newOption.text = dataObj[key]['nom']+" "+dataObj[key]['prenom'];
                        //console.log(dataObj[key]);
                        el.add(newOption);
                    }
                }) // Afficher les données dans la console
                .catch(error => console.error(error)); // Gérer les erreurs éventuelles
                
            }
        }


        function alimenteSelectClient(idSelect,idSearch){
            let el = document.getElementById(idSelect);
            let search = document.getElementById(idSearch);
            let value = search.value;
            el.length = 0;
            if(value.length > 2){
                value = value.replace(/ /g, "-");
                let url = "http://api.test/client/like/"+value;
                fetch(url)
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data =>{
                    const dataObj = data
                    for (const key in dataObj) {
                        let newOption = document.createElement("option");
                        newOption.value = dataObj[key]['idClient'];
                        newOption.text = dataObj[key]['nom']+" "+dataObj[key]['prenom'];
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