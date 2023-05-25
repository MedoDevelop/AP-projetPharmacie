function setIdMutuelle(id) {
	document.cookie="mutuelle="+id+"";
}

function closeModal(){
	var modal=document.getElementById('leModal');
	modal.setAttribute('class','modal');
	document.location.href ='http://localhost/AP-projetPharmacie/?action=consulMutuelle';
}

function openModal(){
	
  	var modal=document.getElementById('leModal');
  	modal.removeAttribute("class");
	//modal.setAttribute('class','modal is-active');
	
 }
	
