<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");

if (isset($_GET['id_remolque'])) {
    $id_remolque = $_GET['id_remolque'];
    $query_foranea1="DELETE FROM llanta WHERE id_remolque = $id_remolque";
    $result2 = mysqli_query($conexion, $query_foranea1);
    $query = "DELETE FROM remolque WHERE id_remolque = $id_remolque";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        $_SESSION['message'] = 'Remolque ha sido removido correctamente';

        header("Location: add_remolque_view.php");
    } else {
        $_SESSION['message'] = 'Error al eliminar el remolque';
        header("Location: add_remolque_view.php");
    }
}
