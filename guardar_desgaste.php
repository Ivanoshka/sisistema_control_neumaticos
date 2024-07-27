<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA CONDUCTORES A LA BASE DE DATOS
 */
include("./conexionBD.php");



if(isset($_POST['save_desgaste'])){
    $id_llanta = $_POST['id_llanta'];
    $desgaste_total_interno = $_POST['desgaste_total_interno'];
    $desgaste_total_medio = $_POST['desgaste_total_medio'];
    $desgaste_total_externo = $_POST['desgaste_total_externo'];

    $desgaste_parcial_interno = $_POST['desgaste_parcial_interno'];
    $desgaste_parcial_medio = $_POST['desgaste_parcial_medio'];
    $desgaste_parcial_externo = $_POST['desgaste_parcial_externo'];

    $nombre_viaje = $_POST['nombre_viaje'];

    $query = "INSERT INTO detalles_llanta(id_llanta,desgaste_total_interno, desgaste_total_medio, desgaste_total_externo, desgaste_parcial_interno, desgaste_parcial_medio, desgaste_parcial_externo, nombre_viaje) VALUES('$id_llanta','$desgaste_total_interno','$desgaste_total_medio','$desgaste_total_externo', '$desgaste_parcial_interno', '$desgaste_parcial_medio', '$desgaste_parcial_externo', '$nombre_viaje')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Desgaste Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_desgastes_view.php");
    
    

}

?>