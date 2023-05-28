 function setIdClient(id) {
	document.cookie="client="+id+"";
}

function closeModal(){
	var modal=document.getElementById('leModal');
	modal.setAttribute('class','modal');
	document.location.href ='http://localhost/AP-projetPharmacie/?action=consulMutuelle';
}


 function verifySubmit(){

 	var form=document.getElementById('formClient');

 	var message=document.getElementById("message");

 	var numSecu=document.getElementById('numSecu');
 	var nom=document.getElementById('nom');
 	var prenom=document.getElementById('prenom');
 	var mail=document.getElementById('email'); 	
 	var tel=document.getElementById('tel');
 	var dateNaiss=document.getElementById('dateNaiss');
 	var mutuelle=document.getElementById('mutuelle');
 	var rue=document.getElementById('rue');
 	var ville=document.getElementById('ville');
 	var cp=document.getElementById('cp');

   	form.addEventListener("submit", function(e){
	    if(numSecu.value=="" || nom.value=="" || prenom.value=="" || mail.value=="" || tel.value=="" || dateNaiss.value=="" || mutuelle.value=="" || rue.value=="" || ville.value=="" || cp.value==""){
	    	e.preventDefault();
	    	message.setAttribute("style","color:red;");
	    	message.innerHTML="Tous les champs ne sont pas correctement remplis";

	    	if(numSecu.value==""){
	    		numSecu.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(nom.value==""){
	    		nom.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(prenom.value==""){
	    		prenom.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(mail.value==""){
	    		mail.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(tel.value==""){
	    		tel.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(dateNaiss.value==""){
	    		dateNaiss.setAttribute("style","width:150px;margin-left:0px;border: 1px solid red;");
	    	}
	    	if(mutuelle.value==""){
	    		mutuelle.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(rue.value==""){
	    		rue.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(ville.value==""){
	    		ville.setAttribute("style","border: 1px solid red;");
	    	}
	    	if(cp.value==""){
	    		cp.setAttribute("style","border: 1px solid red;");
	    	}
	    }
	});

 }

 function selectedValue(val){
    	var select = document.getElementById("mutuelle");
    	select.value=val;
    }