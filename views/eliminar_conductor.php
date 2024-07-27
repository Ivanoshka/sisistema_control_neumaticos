<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");

if (isset($_GET['id_conductor'])) {
    $id_conductor = $_GET['id_conductor'];
    $query = "DELETE FROM conductor WHERE id_conductor = $id_conductor";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        $_SESSION['message'] = 'Conductor ha sido removido correctamente';
        header("Location: add_conductores_view.php");  
  
    }  else {
        $_SESSION['messageError'] = 'No se puede borrar el conductor, porque está asignado a uno ó varios camiones';
        header("Location: add_conductores_view.php");
    }
}
?>