<body>
    <center><h1>Les médicament figurant sur au moins une ordonance</h1>
    <table class="table" style="width: 75%;">
        <thead>

        </thead>
     <tbody>

    
    <?php
        for($i=($page-1)*5;$i<($page)*5;$i++){
            if(isset($medoc[$i])){
                $el = $medoc[$i];
    ?>
            <tr>
            <td>
                <?php
                    if($el['qteNeed'] > $el['stock']){
                ?>
                 <a href="index.php?action=graf&medicament=<?=$el['id']?>" class="box" >
                <?= $el['libelle'] ?><div class="notif red"></div>            
            </a>
            <?php }else{ ?>
                 <a href="index.php?action=graf&medicament=<?=$el['id']?>" class="box" >
                <?= $el['libelle'] ?><div class="notif blue"></div>               
            </a>
            <?php } ?>
           
            </td>
            </tr>
    <?php
        }
    }
    ?>
    </tbody>
    </table>
    <a href="index.php?action=medocSolicite&page=<?= $page-1 ?>" class="button" ><</a>
    <div class="button"><?= $page.'/'.$nbPage ?></div>
    <a href="index.php?action=medocSolicite&page=<?= $page+1 ?>" class="button">></a>
    <br/>
    </center>
    <div class="box">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Légende
        <br/>
        <br/>
        <p>
            <div class="button">
            <div class="notif red" style="float:none;"></div>&nbsp;&nbsp;&nbsp;Le stock du médicament est inférieur à la demmande.
        </div>
        </p>
        <br/>
        <p>
            <div class="button">
            <div class="notif blue" style="float:none;"></div>&nbsp;&nbsp;&nbsp;Le stock du médicament est supérieur à la demmande.
        </div>
        </p>
    </div>
    
</body>