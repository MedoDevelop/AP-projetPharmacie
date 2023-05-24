//Mettre ajour la quatite du stock en utilisant l'api puis raffréchir la page
//restrictions de sécurité CORS (Cross-Origin Resource Sharing). CORS 
//est une mesure de sécurité qui empêche les sites web de faire des 
//requêtes HTTP vers des ressources sur des domaines différents

//on ne peux donc pas passer par javascript.. a moins que ...
function addQuantity(idMedoc,idNumber){
    const id = idMedoc;
    const quantite = document.getElementById(idNumber).value;

    const infos = {
    idMedoc: id,
    libelle: quantite
    };

    fetch('http://localhost/api/stock/add', {
    method: 'PUT',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(infos)
    }).then(response => {
  if (response.ok) {
    return response.json();
  }
  throw new Error('La requête a échoué');
})
.then(data => {
  console.log(data);
})
.catch(error => {
  console.error('Erreur:', error);
});
    location.reload();
}

function reduceQuantity(idMedoc,idNumber){
    const id = idMedoc;
    const quantite = document.getElementById(idNumber).value;

    const infos = {
    idMedoc: id,
    libelle: quantite
    };

    fetch('http://localhost/api/stock/reduce', {
    method: 'PUT',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(infos)
    }).then(response => {
  if (response.ok) {
    return response.json();
  }
  throw new Error('La requête a échoué');
})
.then(data => {
  console.log(data);
})
.catch(error => {
  console.error('Erreur:', error);
});
    location.reload();
}