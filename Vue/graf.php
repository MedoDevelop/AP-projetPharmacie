<body>
<script src="Javascript/stockquantity.js"></script>

<?php
    if(sizeof($mois) != 0){
?>
<div style="margin-left: 20%;">
    <h1>Statistiques du médicament</h1>
    <p>Identifiant : <b><?= $stats['id'] ?></b></p>
    <p>Libelle : <b><?= $stats['Libelle'] ?></b></p>
    <p>Forme : <b><?= $stats['Forme'] ?></b></p>
    <p> Pour ce mois-ci les besoins sont de <b><?= $stats['BesoinActuel'] ?></b> médicament(s) </p>
    <p> vous devrez en commander <b><?= $stats['ManquantActuel'] ?></b> au total.</p>
    <p> Pour toute la période les besoins sont de <b><?= $stats['BesoinFinal'] ?></b></p>
    <p> vous devrez en commander <b><?= $stats['ManquantFinal'] ?></b> au total.</p>
</div>
<div class="box">
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    const ctx = document.getElementById("myChart");
    new Chart(ctx, {
        type: 'line',
        data: {
        labels: JSON.parse('<?php echo $jsonMois; ?>'),
            datasets: [{
            label: 'Evolution du stock prévue',
                data: JSON.parse('<?php echo $jsonEvoStock; ?>'),
                tension: 0,//Tension affecte la courbure des ligne par raport au points de passage, 0 pour des ligne droites
                backgroundColor: [
                    'rgba(50,200,20,0.2)'
                ],
                borderColor: [
                    'rgba(50,200,20,1)'
                ],
                borderWidth: 5
            },{
                label: 'Evolution des besoins du médicament',
                data: JSON.parse('<?php echo $jsonQte; ?>'),
                tension: 0,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(255, 206, 86, 0.4)',
                    'rgba(75, 192, 192, 0.4)',
                    'rgba(153, 102, 255, 0.4)',
                    'rgba(255, 159, 64, 0.4)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 5
            }]
        },
        options: {
            layout: {
                    padding: 60
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<?php
    }else{
        ?>
        <br/><br/><br/>
        <center><h4 class="title is-4"> Aucune évolution pour ce médicament, il ne figure sur aucune ordonnance. </h4></center>
        <br/><br/><br/>
        <hr/>
        <?php
    }
?>
<section>
    <br/>
    <div class="container">
        <h5 class="title is-5">Mise à jour du stock</h5>
        <p>Stock actuel : <?= $stats['StockActuel'] ?></p>
        <div>
            <form action="index.php?action=addStock&medicament=<?= $stats['id'] ?>" method="post">
                <p>Ajouter au stock</p> 
                <input type="number" name="nbAdd" value="0" />
                <button class="button"> Ajouter </button>
            </form>
        </div>
        <div>
            <form action="index.php?action=reduceStock&medicament=<?= $stats['id'] ?>" method="post">
                <p>Retirer du stock</p>
                <input type="number" name="nbReduce" value="0" />
                <button class="button"> Retirer </button>
            </form>
        </div>
    </div>
    <br/>
    <br/>   
</section>

</body>