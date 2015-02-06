var segundos = 1;
var divid = "situacion";
var objetoAjax;
	 
function crearObjetoAjax(){
	try{
		objetoAjax=new XMLHttpRequest();
	}catch (e){
		try{
			objetoAjax=new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e){
			try{
				objetoAjax=new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){
				alert("Tu explorador no soporta AJAX.");
				return false;
			}
		}
	}

}
function enviar(asiento){
	var misdatos="asiento="+asiento;
	objetoAjax.open("POST","actualiza.php",true);
	objetoAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	objetoAjax.setRequestHeader("Content-length", misdatos.length);
	objetoAjax.setRequestHeader("Connection", "close");
	objetoAjax.send(misdatos); 
}

function refresca(){
	var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
	var url = "comoesta.php?t="+timestamp;
	objetoAjax.onreadystatechange=function(){
		if(objetoAjax.readyState== 4 && objetoAjax.readyState != null){
			document.getElementById(divid).innerHTML=objetoAjax.responseText;
			setTimeout('refresca()',segundos*1000);
		}
	}
	objetoAjax.open("GET",url,true);
	objetoAjax.send(null);
}
window.onload = function(){
	crearObjetoAjax();
	refresca();	
}