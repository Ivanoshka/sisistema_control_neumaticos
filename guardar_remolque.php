<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA CAMIONES A LA BASE DE DATOS
 */
include("./conexionBD.php");


if(isset($_POST['save_remolque'])){
    $placas = $_POST['placas'];
    $marca_remolque = $_POST['marca_remolque'];
    $modelo = $_POST['modelo'];
    $unidad_serie= $_POST['unidad_serie'];
    $id_socio = $_POST['id_socio'];
    $id_conductor = $_POST['id_conductor'];
    


    $query = "INSERT INTO remolque(placas,marca_remolque, modelo, unidad_serie, id_socio, id_conductor) VALUES('$placas','$marca_remolque', '$modelo', '$unidad_serie','$id_socio','$id_conductor')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Remolque Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_remolque_view.php"); 
    
    

}

?>