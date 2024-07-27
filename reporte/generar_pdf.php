<nav>
  
    <div class="nav-wrapper navBarColor">
      <a href="../views/add_camion_view.php" class="brand-logo"><i class="small material-icons right">donut_small</i></a>
      <ul class="right hide-on-med-and-down">


        <li><a href="../views/add_camion_view.php">Camiones</a></li>
        <li><a href="../views/add_remolque_view.php">Remolques</a></li>
        <li><a href="../views/add_llanta_view.php">LLantas <i class="material-icons right waves-effect waves-light ">add_circle_outline</i></a> </li>
        <li><a href="#!">
        <li><a href="../views/add_conductores_view.php">Conductores</a></li>
        <li><a href="../views/add_reporte_view.php">Viaje</a></li>
        <li><a href="../index.php"><i class="material-icons right waves-effect waves-light">power_settings_new</i></a> </li>
        

      </ul>
    </div>
  </nav>

<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */


include("../conexionBD.php");

/*parte para agregar los datos que se obtengan de la base de datos */

    if (isset($_GET['id_reporte'])) {
        $id_reporte = $_GET['id_reporte'];
        $query = "SELECT * FROM reporte WHERE id_reporte = $id_reporte ";
        $result = mysqli_query($conexion,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $ruta = $row['ruta'];
            $nombre_conductor = $row['nombre_conductor'];
            $fecha_salida = $row['fecha_salida'];
            
        }
    }

    /* Se hacen cambios con el update para hacer los cambios en la base de datos */
    if(isset($_POST['update'])){
        $id_reporte = $_GET['id_reporte'];
        $ruta = $_POST['ruta'];
        $nombre_conductor = $_POST['nombre_conductor'];
        $fecha_salida = $_POST['fecha_salida'];

        $query = "UPDATE reporte set ruta = '$ruta' ,nombre_conductor='$nombre_conductor',fecha_salida='$fecha_salida' WHERE id_reporte = $id_reporte";

        mysqli_query($conexion, $query);

        
    }

?>

<?php
    include("../includes/head.php");
?>
<div class="container p-4">
<div class="row">
            <br>
            <h4>EDITAR VIAJE</h4>
            <p>Antes de guardar tus cambios, asegurate de poner los datos correctos para generar el <b>PDF</b> del <b>VIAJE</b></p>
        </div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="generar_pdf.php?id_reporte=<?php echo $_GET['id_reporte'];?>" method="POST">

                <!-- estos datos se mandan a la tabla de reporte ,ya que estos datos se llenan directamente(nombre del conductor y la ruta) -->

                <!-- RUTA -->
                <div class="row">
                        <div class="input-field col s6">
                                
                                <input id="ruta" type="text" class="validate" name="ruta" value="<?php echo $ruta; ?>">
                                <label for="ruta">Ruta</label>
                                <span class="helper-text">Ej. CDMX-GLD</span>
                        </div>
                    </div>


                    <!-- Nombre Conductor -->
                    <div class="row">
                        <div class="input-field col s6">
                                
                                <input id="nombre" type="text" class="validate" autofocus name="nombre_conductor" value="<?php echo $nombre_conductor; ?>">
                                <label for="nombre">Nombre del conductor</label>
                        </div>
                    </div>
                    <!-- Nombre Conductor -->
                    <div class="row">
                        <div class="input-field col s6">
                                
                                <input id="fecha_salida" type="date" class="validate" name="fecha_salida" value="<?php echo $fecha_salida; ?>">
                                <label for="fecha_salida">Fecha de Salida</label>
                        </div>
                    </div>

                    

                       
                    
                        <p>Antes de generar el PDF, verifica los datos de arriba<b></b></p>
                    

<!-- boton para actualizar los datos del reporte para despues descargar o enviar -->
<input type="submit" name="update" value="Guardar Datos" id="" class="btn btn-sucess btn-block">

                    

                    <div class="col-md-8">

        <br>

        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th scope="col">Reporte</th>
            </tr>
          </thead>

          <!-- Botones de eleccion para poder descargar o enviar el pdf-->

            <tr>
            <!-- <td>
                      <a href="../reporte/enviar.php?id_reporte=<?php echo $row['id_reporte']?>" class="btn btn-secondary">
                        Enviar PDF
                      </a>
                      
              </td> -->
              <td>
                      <a href="../reporte/reporte.php?id_reporte=<?php echo $row['id_reporte']?>" class="btn btn-secondary">
                        Generar PDF
                      </a>
                      
              </td>

              
            </tr>


          <tbody>

          </tbody>
        </table>

      </div>
                 
                    </form>
            </div>
        </div>
    </div>
</div>
