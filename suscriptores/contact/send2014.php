<?php 

/* Enviar E-mail con Respuesta Automática*/


$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$emailcliente = $_POST["emailclient"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$comentarios = $_POST["comentarios"];
//A nombre de donde proviene el correo (usuario)
$NombreRem="Usuario en AteneaPharma.com";
$EmailRem=$emailcliente;

//Nombre del sitio WEB empresa
$NombreEmpresa ="Atenea Pharma";
// mail del sitio WEB empresa
$EmailEmpresa = "ateneapharma@gmail.com";


// Definiendo las cabeceras del e-mail para la WEB empresa

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
//dirección del remitente 
$headers .= "From: ".$NombreRem." <".$EmailRem.">\r\n"; 
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: ".$EmailRem."\r\n"; 
//ruta del mensaje desde origen a destino 
$headers .= "Return-path: " .$NombreEmpresa. "<".$EmailEmpresa.">\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: web@revistarelax.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: web@revistarelax.com\r\n"; 


// Definiendo las cabeceras del e-mail para el usuario

$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= "Content-type: text/html; charset=utf-8\r\n";
//dirección del remitente 
$headers2 .= "From: ".$NombreEmpresa."<".$EmailEmpresa.">\r\n"; 
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers2 .= "Reply-To: ".$EmailEmpresa."\r\n"; 
//ruta del mensaje desde origen a destino 
$headers2 .= "Return-path: " .$NombreRem. "<".$EmailRem.">\r\n"; 





// Definiendo el aspecto del mensaje

$mensaje   = "<h3>De:</h3> ";
$mensaje  .= $nombre . "</br> ";
$mensaje  .= $empresa;
$mensaje  .= "</br> ( ". $emailcliente ." )";

$mensaje  .= "<p>";
$mensaje  .= "<h3>Asunto:</h3>";
$mensaje  .= "Cliente Contacta para: " . $asunto;
//$mensaje  .= "</br>Cliente referido de: " . $encontro;
$mensaje  .= "</p>";

$mensaje  .= "<p>";
$mensaje  .= "<h3>Información del cliente:</h3>";
//$mensaje  .= "Ubicación: ".$ubicacion;
$mensaje  .= "</br> Teléfono: " . $telefono;
//$mensaje  .= "</br> Teléfono Celular: " . $telcel;
$mensaje  .= "</p>";

$mensaje  .= "<p>";
$mensaje  .= "<h3>Mensaje guardado:</h3>";
$mensaje  .= $comentarios;
$mensaje  .= "</p>";



// Enviando el mensaje para el destinatario (yo)
$envia .=  mail($EmailEmpresa,"Cliente Contacta desde el portal ateneapharma.com",$mensaje,$headers);


// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido.

$mensaje2  = "<p>Hola <strong>" . $nombre . "</strong>.</p>";
$mensaje2 .= "<p> Agradecemos su visita y  en breve estaremos respondiendo a su solicitud.</p> </br>Gracias...";
$mensaje2 .= "<p>Atenena Pharma </p>";
$mensaje2 .= "</br>____________________________________________________</br>";
$mensaje2 .= "<p></p>";

$envia2 =  mail($EmailRem,"En breve recibirá un respuesta a su mensaje",$mensaje2,$headers2);

session_start();
if ($_POST['action'] == "checkdata") {
    if ($_SESSION['tmptxt'] == $_POST['captcha_reqcap']) {
        // Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto.

        //echo "Mensaje recibido con exito!";

        echo "<meta http-equiv='refresh' content='2;URL=send_ok.php'>";
    } else {
        echo "Codigo verificador erroneo, Intentar nuevamente";
        echo '<a href="javascript: history.back(-1)"> volver </a>';
    }
    exit;
}




?> 