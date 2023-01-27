<?php

/*aca debajo guardamos en las variables los datos de las inputs del index*/
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];


/*Aqui debajo va el mail donde enviaremos el correo */
$para = "santiagobergerat@gmail.com"; 
$asunto = "Mensaje desde mi pagina de $nombre";

$mensaje = "

Nombre del remitente : ".$nombre." 
Correo:              ".$email."
mensaje: ".$mensaje."



";



mail($para, $asunto,utf8_decode($mensaje));

/*aca abajo le decimos donde debe redireccionar luego de enviar tood <eso></eso>*/

header("location: index.html");

?>