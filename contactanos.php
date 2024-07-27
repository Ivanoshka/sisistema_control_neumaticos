<!-- ESTE ES EL ARCHIVO BACKEND DE EL FORMULARIO DE CONTACTO AL CORREO ELECTRONICO DE LA EMPRESA-->

<?php


  //datos de entrada
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"]; 
 
  $carta = "De: $name \n";
  $carta .= "Correo: $email \n";
  $carta .= "Mensaje: $message";


//mis credenciales
$destinatario = "ferrada.sdr@gmail.com";
$asunto = "Contacto desde nuestra web";


$mail = @mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>