<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");

/*parte para agregar los datos que se obtengan de la base de datos */

    
   /*parte para agregar los datos que se obtengan de la base de datos de la posicion */

   if (isset($_GET['id_posicion_llanta'])) {
    $id_posicion_llanta = $_GET['id_posicion_llanta'];
    $query = "SELECT * FROM posicion_llanta WHERE id_posicion_llanta = $id_posicion_llanta";
    $result = mysqli_query($conexion,$query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $nombre_posicion = $row['nombre_posicion'];
    }
}



    /* Se hacen cambios con el update para hacer los cambios en la base de datos */
    if(isset($_POST['save_posicion'])){
        $id_posicion_llanta = $_GET['id_posicion_llanta'];
        $nombre_posicion = $_POST['nombre_posicion'];

        $query = "UPDATE posicion_llanta set nombre_posicion='$nombre_posicion' WHERE id_posicion_llanta = $id_posicion_llanta";

        mysqli_query($conexion, $query);
        $_SESSION['message'] = 'La posicion se actualizado correctamente';
        $_SESSION['message_type']='warning';
        header("Location: add_posicionLlanta_view.php");
    }

?>
 <?php include("../includes/nav.php") ?>
<?php
    include("../includes/head.php");
?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
            <form action="edit_posicionLlanta.php?id_posicion_llanta=<?php echo $_GET['id_posicion_llanta'];?>" method="POST">
                    

                            <!-- Posicion llanta -->
                                <div class="row">
                                    <div class="input-field col s6">
                                    <select name="nombre_posicion" id="nombre_posicion">
                                        <optgroup label='Posiciones de la llanta'>
                                            <option>Posicion 1</option>
                                            <option>Posicion 2</option>
                                            <option>Posicion 3</option>
                                            <option>Posicion 4</option>
                                            <option>Posicion 5</option>
                                            <option>Posicion 6</option>
                                            <option>Posicion 7</option>
                                            <option>Posicion 8</option>
                                            <option>Posicion 9</option>
                                            <option>Posicion 10</option>
                                            <option>Posicion 11</option>
                                            <option>Posicion 12</option>
                                            <option>Posicion 13</option>
                                            <option>Posicion 14</option>
                                            <option>Posicion 15</option>
                                            <option>Posicion 16</option>
                                        </optgroup>
                                        <optgroup label='Repuestos de la llanta'>
                                            <option>Repuesto 1</option>
                                            <option>Repuesto 2</option>
                                        </optgroup>
                                    </select>
                                    <label for="id_posicion_llanta">Nombre Posicion Llanta</label>
                                    </div>
                                </div>
                    
                                <button class="btn btn-sucess" name="save_posicion" >
                        Guardar
                    </button>
                    </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, arguments);
    });
  </script>

