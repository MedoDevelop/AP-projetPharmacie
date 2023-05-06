<body>
    <center><h1>Les médicament figurant sur au moins une ordonance</h1></center>
    <table class="table" style="width: 100%;padding: 50px;">
        <thead>

        </thead>
     <tbody>

    
    <?php
        foreach($medoc as $el){
    ?>
            <tr>
            <td>

            
            <a href="index.php?action=graf&medicament=<?=$el['id']?>" class="box" >
                <?= $el['libelle'] ?>               
            </a>
            </td>
            </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
    
</body>