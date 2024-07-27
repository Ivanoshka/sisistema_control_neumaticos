<?php
/* SE MANDA A LLAMAR A LA BASE DE DATOS */

include("../conexionBD.php");

/*parte para agregar los datos que se obtengan de la base de datos de la llanta*/

    if (isset($_GET['id_llanta'])) {
        $id_llanta = $_GET['id_llanta'];
        $query = "SELECT * FROM llanta WHERE id_llanta = $id_llanta";
        $result = mysqli_query($conexion,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id_llanta = $row['id_llanta'];
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $id_camion = $row['id_camion'];
            $id_remolque = $row['id_remolque'];
            $fecha_de_colocacion = $row['fecha_de_colocacion'];
            $id_posicion_llanta = $row['id_posicion_llanta'];
        }
    }

    /* Se hacen cambios con el update para hacer los cambios en la base de datos */
    if(isset($_POST['save_llanta'])){
        $id_llanta = $_GET['id_llanta'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $id_camion = $_POST['id_camion'];
        $id_remolque = $_POST['id_remolque'];
        $fecha_de_colocacion = $_POST['fecha_de_colocacion'];
        $id_posicion_llanta = $_POST['id_posicion_llanta'];

        $query = "UPDATE llanta set id_llanta='$id_llanta',marca='$marca',modelo='$modelo',id_camion='$id_camion' ,id_remolque='$id_remolque', fecha_de_colocacion='$fecha_de_colocacion',id_posicion_llanta='$id_posicion_llanta'  WHERE id_llanta = $id_llanta";

        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Llanta actualizado correctamente';
        $_SESSION['message_type']='warning';
        header("Location: add_llanta_view.php");
    }

    
?>


    


 <?php include("../includes/nav.php") ?>
<?php
    include("../includes/head.php");
?>


<div class="container p-4">
<div class="row">
            <br>
            <h4>EDITAR LLANTA</h4>
            <p>Antes de guardar tus cambios, asegurate de seleccionar de nuevo el <b>CAMION</b> y la nueva posicion <b>POSICION</b></p>
        </div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_llanta.php?id_llanta=<?php echo $_GET['id_llanta'];?>" method="POST">
                    <!-- ID manual no se agrega ya que el id es unico -->
                            <!-- <div class="row">
                            <div class="input-field col s6">
                                <input id="id_llanta" type="text" class="validate" name="id_llanta" value="<?php echo $id_llanta; ?>">
                                <label for="id_llanta">Id Llanta</label>
                            </div> -->

                            <!-- Marca -->
                            <div class="row">
                            <div class="input-field col s6">
                                <input id="marca" type="text" class="validate" name="marca" value="<?php echo $marca; ?>">
                                <label for="Apellido">Marca</label>
                            </div>

                            </div>

                            <!--Modelo -->
                            <div class="row">
                            <div class="input-field col s6">
                                <input id="modelo" type="text" class="validate" name="modelo" value="<?php echo $modelo; ?>">
                                <label for="numero_contrato">Modelo</label>
                            </div>

                            </div>

                                <!-- Posicion llanta -->
          <div class="row">
            <div class="input-field col s6">
            <select name="id_posicion_llanta" id="id_posicion_llanta" onclick="mostrarFunciones()">
                                    <?php
                                    $consulta = "SELECT * FROM posicion_llanta";
                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                    $valorPredeterminado = '<?php $id_posicion_llanta ?>';
                                    ?>

                                    <option value="<?php echo $id_posicion_llanta ?>" style="display: none;"></option>
                                    <?php



                                    foreach ($ejecutar as $opciones) : ?>

                                        <option value="<?php echo $opciones['id_posicion_llanta'] ?> "><?php echo $opciones['nombre_posicion'] ?> </option>







                                    <?php endforeach ?>
                                </select>

                <label for="id_posicion_llanta">Nombre de la Posicion de la Llanta</label>
            </div>
          </div>


                            
                            <!--  Condicion llanta 
                            <div class="row">
                            <div class="input-field col s6">
                                    <select name="condicion_llanta" id="condicion_llanta">
                                    <optgroup label='Desgaste Relativo'>
                                        <option>Interno</option>
                                        <option>Intermedio</option>
                                        <option>Externo</option>
                                    </optgroup>
                                    <optgroup label='Desgaste Absoluto'>
                                        <option>Interno</option>
                                        <option>Intermedio</option>
                                        <option>Externo</option>
                                    </optgroup>
                                </select>
                            
                                <label for="condicion_llanta">Condicion Llanta</label>
                            </div>
                            </div> -->

                        

<!--Seleccionar si sera para camioneta o remolque -->
   
<div class="row">
    <b>Selecciona si sera CAMION o REMOLQUE</b>
    <br>
    <!-- se crean estos 2 botones para seleccionar si es camion o remolque, se manda llamar una funcion de javaScript y se pueda ejecutar -->
    <p><a href="javascript:camion();" class="btn btn-secondary">Camion</a></p>
    <p><a href="javascript:remolque();" class="btn btn-secondary">Remolque</a></p>

    <br>
    
      <div class="input-field col s6" id="camion" style="display:none;" >
      
          <select name="id_camion" id="id_camion">
                    <?php
                    include("../conexionBD.php");
                    $consulta = "SELECT * FROM camion";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                    ?>

                    <?php
                    foreach ($ejecutar as $key => $opciones) : ?>
                      <option value="<?php echo $opciones['id_camion'] ?> "><?php echo "Placas del camion: " ?><?php echo $opciones['placas'] ?><?php echo "   Serie del camion: " ?> <?php echo $opciones['unidad_serie'] ?></option>

                    <?php endforeach ?>
                  </select>
            <label for="numero_contrato">Camion</label>
      </div>

      <div class="input-field col s6" id="remolque" style="display:none;">
      <select name="id_remolque" id="id_remolque">
                <?php
                include("../conexionBD.php");
                $consulta = "SELECT * FROM remolque";
                $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                ?>

                <?php
                foreach ($ejecutar as $key => $opciones) : ?>
                  <option value="<?php echo $opciones['id_remolque'] ?> "><?php echo "Placas del remolque: " ?><?php echo $opciones['placas'] ?><?php echo "   Serie del Remolque: " ?> <?php echo $opciones['unidad_serie'] ?></option>

                <?php endforeach ?>
              </select>
        <label for="id_remolque">Remolque</label>
      </div>

    </div>

<!-- Script para mostrar el div sea para agregar camion o el remolque  -->
    <script type="text/javascript">
      divC = document.getElementById('camion');
      divR = document.getElementById('remolque');
              function camion() {
            
            if (divC.style.display === "none") {
              divC.style.display = "block";
              divR.style.display = "none";
            } else {
              divC.style.display = "none";
              divR.style.display = "block";
            }
        }

        function remolque() {
            
            if (divR.style.display === "none") {
              divR.style.display = "block";
              divC.style.display = "none";
            } else {
              divR.style.display = "none";
              divC.style.display = "block";
            }
        }
    </script>



                            <!--Fecha de colocacion -->
                            <div class="row">
                            <div class="input-field col s6">
                                <input id="fecha_de_colocacion" type="Date" class="validate" name="fecha_de_colocacion" value="<?php echo $fecha_de_colocacion; ?>">
                                <label for="numero_contrato">Fecha Colocacion de RFID</label>
                            </div>

                            </div>
                    
                    <button class="btn btn-sucess" name="save_llanta" >
                        Guardar Cambios
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






 

