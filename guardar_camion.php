<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA CAMIONES A LA BASE DE DATOS
 */
include("./conexionBD.php");


if(isset($_POST['save_camion'])){
    $placas_camion = $_POST['placas'];
    $marca_camion = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $unidad_serie= $_POST['unidad_serie'];
    $remolque = $_POST['remolque'];
    $id_conductor = $_POST['conductores'];
    


    $query = "INSERT INTO camion(placas,marca_camion, modelo, unidad_serie, id_conductor) VALUES('$placas_camion','$marca_camion', '$modelo', '$unidad_serie','$id_conductor')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Camion Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_camion_view.php"); 
    
    

}

?>