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