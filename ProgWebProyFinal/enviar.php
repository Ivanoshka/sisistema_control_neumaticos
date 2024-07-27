<!-- esta clase envia un correo  a la direccion carlosivanroque@gmail.com
 -->
<?php
$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $texto =  filter_var($_POST['texto'], FILTER_SANITIZE_EMAIL);

    if (!empty($email) && !empty($nombre) && !empty($texto)){
        $enviar_a = 'carlosivanroque@gmail.com';
        $asunto = 'Correo enviado desde mi pagina';
        $mensaje_preparado = "De: $nombre \n "; 
        $mensaje_preparado .= "Correo: $email \n";
        $mensaje_preparado .= "Mensaje:" . $texto;
        
        mail($enviar_a,$asunto,$mensaje_preparado);
        
        header("Location: views/Contacto.view.php");
    
       
    }



} 
?>