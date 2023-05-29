function setIdMutuelle(id) {
	document.cookie="mutuelle="+id+"";
}

function closeModal(){
	var modal=document.getElementById('leModal');
	modal.setAttribute('class','modal');
	document.location.href ='http://localhost/AP-projetPharmacie/?action=consulMutuelle';
}

 function verifySubmit(){

 	var form=document.getElementById('formMutuelle');

 	var message=document.getElementById("message");

 	var nom=document.getElementById('nom');
 	var mail=document.getElementById('email');
 	var tel=document.getElementById('tel');

   	form.addEventListener("submit", function(e){
	    if(nom.value=="" || mail.value=="" || tel.value==""){
	    	e.preventDefault();
	    	message.setAttribute("style","color:red;");
	    	message.innerHTML="Tous les champs ne sont pas correctement remplis";
	    	if(nom.value==""){
	    		nom.setAttribute("style","width:300px;margin-left:0px;border: 1px solid red;");
	    	}
	    	if(mail.value==""){
	    		mail.setAttribute("style","width:300px;margin-left:0px;border: 1px solid red;");
	    	}
	    	if(tel.value==""){
	    		tel.setAttribute("style","width:300px;margin-left:0px;border: 1px solid red;");
	    	}
	    }
	});

 }

