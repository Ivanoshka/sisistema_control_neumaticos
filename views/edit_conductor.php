<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");
$nombre_conductor = "";
$apellido_conductor =  "";
$numero_contrato =  "";

/*parte para agregar los datos que se obtengan de la base de datos */

    if (isset($_GET['id_conductor'])) {
        $id_conductor = $_GET['id_conductor'];
        $query = "SELECT * FROM conductor WHERE id_conductor = $id_conductor";
        $result = mysqli_query($conexion,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre_conductor = $row['nombre_conductor'];
            $apellido_conductor = $row['apellido_conductor'];
            $numero_contrato = $row['numero_contrato'];
        }
    }

    /* Se hacen cambios con el update para hacer los cambios en la base de datos */
    if(isset($_POST['update'])){
        $id_conductor = $_GET['id_conductor'];
        $nombre_conductor = $_POST['nombre_conductor'];
        $apellido_conductor = $_POST['apellido_conductor'];
        $numero_contrato = $_POST['numero_contrato'];

        $query = "UPDATE conductor set nombre_conductor='$nombre_conductor',apellido_conductor='$apellido_conductor',numero_contrato='$numero_contrato' WHERE id_conductor = $id_conductor";

        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Conductor actualizado correctamente';
        $_SESSION['message_type']='warning';
        header("Location: add_conductores_view.php");
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
                <form action="edit_conductor.php?id_conductor=<?php echo $_GET['id_conductor'];?>" method="POST">

                    <!-- Nombre Conductor -->
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="validate" autofocus name="nombre_conductor" value="<?php echo $nombre_conductor; ?>">
                        
                    

                    </div>

                    <!-- Apellido Conductor -->
                    
                    <div class="input-field col s6">
                        <input id="Apellido" type="text" class="validate" name="apellido_conductor" value="<?php echo $apellido_conductor; ?>">
                        <label for="Apellido">Apellido</label>
                    </div>

                    <!-- Numero de contrato Conductor -->
                    
                    <div class="input-field col s6">
                        <input id="numero_contrato" type="text" class="validate" name="numero_contrato" value="<?php echo $numero_contrato; ?>">
                        <label for="numero_contrato">Numero de Contrato</label>
                    </div>

                    <button class="btn btn-sucess" name="update" >
                        Guardar
                    </button>
                    </form>
            </div>
        </div>
    </div>
</div>