function addRow(){
var table=document.getElementById("tableOrdonnance")
var nbr=table.rows.length;

var tr=document.createElement('tr');

var td1=document.createElement("td");
var td2=document.createElement("td");
var td3=document.createElement("td");


var div=document.createElement('div');

var p1=document.createElement('p');
var p2=document.createElement('p');

var inputMedoc=document.createElement('input');

var span=document.createElement('span');

var select=document.createElement('select');

var inputNombre=document.createElement('input')

div.setAttribute('class','field has-addons');

p1.setAttribute('class','control');
p2.setAttribute('class','control');

span.setAttribute('class','select');

var idSelect="selectMedoc"+nbr+"";
var nameSelect="leMedoc"+nbr+"";
select.setAttribute('id',idSelect)
select.setAttribute('name',nameSelect)

inputMedoc.setAttribute('class','input');
var idInputMedoc="medoc"+nbr+"";
inputMedoc.setAttribute('id',idInputMedoc);
inputMedoc.setAttribute('type','text');
var fonctionSearch="alimenteSelectStock('"+idSelect+"','"+idInputMedoc+"')";
inputMedoc.setAttribute('onkeyup',fonctionSearch)


var nameNombre="nombre"+nbr+"";
inputNombre.setAttribute('class','input');
inputNombre.setAttribute('type','number');
inputNombre.setAttribute('name',nameNombre);
inputNombre.setAttribute('min','0');


var a=document.createElement('a')
var img=document.createElement('img')
a.setAttribute('onclick','deleteRow(this)')
img.setAttribute('src','data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAg0lEQVR4nO2WwQmAMAxF/8mldAiXEhdtXCMi5GClijbpofgf5NCWJJ+kLQEIqWMGsAHQi4mdNUcKyc8imqNmb/fdiTTI+hMQUVZ3W5QCkJfQu3a3QCkAbAF4CcFnqL/+iL7SvwCxAGOF72S+ySNgDZiEFo+AwUQ8TcJ3liz5EYMQlNgB9dzfjdR/8lgAAAAASUVORK5CYII=')

table.appendChild(tr)

tr.appendChild(td1);
td1.appendChild(div);
div.appendChild(p1);
p1.appendChild(inputMedoc);
div.appendChild(p2);
p2.appendChild(span);
span.appendChild(select);

tr.appendChild(td2);
td2.appendChild(inputNombre)

tr.appendChild(td3)
td3.appendChild(a)
a.appendChild(img)

}

function deleteRow(r){
	var i = r.parentNode.parentNode.rowIndex;
  	document.getElementById("tableOrdonnance").deleteRow(i);
}

function getNbRows(){
	var table=document.getElementById('tableOrdonnance');
	var nbr=table.rows.length;
	document.cookie="lignesMedoc="+(nbr-1)+"";
	alert(nbr)
}
