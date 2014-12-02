<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gracias por contactarnos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- ESTILO CSS GENERAL -->
<link href="style-form.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
window.onload = function() {
	despegar();
}




function despegar() { 
	var contar = 7 //valor inicial. 
cuenta = document.getElementById("cuenta"); //elemento donde escribimos la cuenta atrás 

			function cuentaAtras() { 
			 	 contar -=1; //variar el número de la cuenta
				 cuenta.innerHTML = contar; //escribir el número
				 				 if (contar <= 0) { //cuando llegamos a 0...
				 		clearInterval(ignicion) //parar la cuenta atrás.
						window.location="http://www.ateneapharma.com"; 
						}
		 } 
		 cuentaAtras() //llamada a la función de cuenta atrás
		      //repetir la función cuenta atrás cada segundo
		 ignicion = setInterval(cuentaAtras,1000);
}


</script>

</head>
<body>

<p align="center">
<img border="0" src="check-contact.png" >
<br>Espere por favor, será redireccionado de vuelta al sitio en <sapn align="center" id="cuenta"> </span> segundos</br>
</p>



 
</body>

</html>
