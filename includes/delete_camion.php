<!-- ESTA CLASE ES PARA BORRAR CAMIONES -->

<?php include("./conexionBD.php");

if (isset($_GET['id_camion'])) {
    $id = $_GET['id_camion'];
    $query_foranea1 = "DELETE FROM llanta WHERE id_camion = $id";
    $result2= mysqli_query($conexion,$query_foranea1);
    $query_foranea2 = "DELETE FROM reporte WHERE id_camion = $id";
    $result2= mysqli_query($conexion,$query_foranea2);

    $query = "DELETE FROM camion WHERE id_camion = $id";
    $result = mysqli_query($conexion, $query);
    if ($result) {
        $_SESSION['message'] = 'Camion Eliminado';
        header("Location: ./views/add_camion_view.php");
    }
    else{
        $_SESSION['messageError'] = 'No se puede borrar el camión';
            header("Location: add_llanta_view.php");
    }
    
}


?>