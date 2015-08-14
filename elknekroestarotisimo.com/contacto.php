<?php
$mensaje = $_POST['mensaje'];
$mensaje.= "\n--------------\n";
$mensaje.= "\nDe: " .$POST['nombre'];
$mensaje.= "\nE-mail: " .$POST['email'];
//En la siguiente línea ingresamos nuestra casilla de correo
$destino = "pedrohe1@hotmail.com";
$remitente = $_POST['email'];
$asunto = "Mensaje enviado por: ".$_POST['nombre'];
mail($destino,$asunto,$mensaje,"FROM: $remitente");
//El mensaje que se mostrará al confirmar el envío
echo "Mensaje enviado. Gracias!";
?>
