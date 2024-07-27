<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA CONDUCTORES A LA BASE DE DATOS
 */
include("./conexionBD.php");



if(isset($_POST['save_posicion'])){
    $nombre_posicion = $_POST['nombre_posicion'];

    $query = "INSERT INTO posicion_llanta(nombre_posicion) VALUES('$nombre_posicion')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Posicion de la Llanta Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_posicionLlanta_view.php");
    
    

}

?>