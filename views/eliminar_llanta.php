<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");
    
    if (isset($_GET['id_llanta'])) {
        $id_llanta = $_GET['id_llanta'];
        $query_foranea = "DELETE FROM detalles_llanta WHERE id_llanta = $id_llanta";
        $result2= mysqli_query($conexion,$query_foranea);
        $query = "DELETE FROM llanta WHERE id_llanta = $id_llanta";
        
        $result = mysqli_query($conexion,$query);

        if($result){
            $_SESSION['message'] = ' la llanta ha sido removido correctamente';
            header("Location: add_llanta_view.php");
        }
        else{
            $_SESSION['messageError'] = 'No se puede borrar la llanta';
            header("Location: add_llanta_view.php");

        } 
    }
?>