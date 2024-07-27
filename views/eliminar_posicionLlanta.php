<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");
    
    if (isset($_GET['id_posicion_llanta'])) {
        $id_posicion_llanta = $_GET['id_posicion_llanta'];
        $query = "DELETE FROM posicion_llanta WHERE id_posicion_llanta = $id_posicion_llanta";
        $result = mysqli_query($conexion,$query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message']= 'La posicion Llanta ha sido removido correctamente';
        $_SESSION['message_type']='danger';
        header("Location: add_posicionLlanta_view.php");
    }
?>