<!-- script para poder mandar diferente consulta para poder guardar la llanta sea para un camion o un remolque -->
<script type="text/javascript">
    //Leer el ID almacenado en localStorage

    var camion = localStorage.getItem('divID');
    var remolque = localStorage.getItem('divIDR');
   
            
            if (camion.style.display === "block") {
                <?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA llantas A LA BASE DE DATOS
 */
include("./conexionBD.php");


if(isset($_POST['save_llanta'])){
    $id_llanta= $_POST['id_llanta'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $id_camion = $_POST['id_camion'];
    $fecha_de_colocacion = $_POST['fecha_de_colocacion'];
    $id_posicion_llanta= $_POST['id_posicion_llanta'];

    $query = "INSERT INTO llanta(id_llanta,marca, modelo,id_camion, fecha_de_colocacion,id_posicion_llanta) VALUES('$id_llanta','$marca', '$modelo','$id_camion','$fecha_de_colocacion','$id_posicion_llanta')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Camion Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_llanta_view.php"); 
    
    

}

?>
            } 

            if (remolque.style.display === "block") {
                <?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA llantas A LA BASE DE DATOS
 */
include("./conexionBD.php");


if(isset($_POST['save_llanta'])){
    $id_llanta= $_POST['id_llanta'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $id_remolque = $_POST['id_remolque'];
    $fecha_de_colocacion = $_POST['fecha_de_colocacion'];
    $id_posicion_llanta= $_POST['id_posicion_llanta'];

    $query = "INSERT INTO llanta(id_llanta,marca, modelo,id_remolque, fecha_de_colocacion,id_posicion_llanta) VALUES('$id_llanta','$marca', '$modelo','$id_remolque','$fecha_de_colocacion','$id_posicion_llanta')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Camion Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_llanta_view.php"); 
    
    

}

?>
            } 
        

  
        
</script>

<?php
/* ESTA CLASE LO QUE HACE ES QUE INSERTA posicion A LA BASE DE DATOS
 */
include("./conexionBD.php");



if(isset($_POST['save_llanta'])){
    $nombre_posicion = $_POST['nombre_posicion'];

    $query = "INSERT INTO posicion_llanta(nombre_posicion) VALUES('$nombre_posicion')";
    $result=mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message']='Posicion de la Llanta Guardado con Exito';
    $_SESSION['message_type']='sucess';

    header("Location: ./views/add_llanta_view.php");
    
    

}

?>