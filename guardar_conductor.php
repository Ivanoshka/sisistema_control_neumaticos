<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA CONDUCTORES A LA BASE DE DATOS
 */
include("./conexionBD.php");



if(isset($_POST['save_conductor'])){
    $nombre_conductor = $_POST['nombre_conductor'];
    $apellido_conductor = $_POST['apellido_conductor'];
    $numero_contrato = $_POST['numero_contrato'];

    $query = "INSERT INTO conductor(nombre_conductor,apellido_conductor, numero_contrato) VALUES('$nombre_conductor','$apellido_conductor','$numero_contrato')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Conductor Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_conductores_view.php");
    
    

}

?>