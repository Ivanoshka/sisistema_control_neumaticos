<!-- ESTA CLASE ES PARA EDITAR LA INFORMACIÓN DE LOS remolques -->


<?php
include("../conexionBD.php");

/*parte para agregar los datos que se obtengan de la base de datos */
if (isset($_GET['id_remolque'])) {
    $id_remolque = $_GET['id_remolque'];
    $query = "SELECT * FROM remolque WHERE id_remolque = $id_remolque";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $placas = $row['placas'];
        $marca_remolque = $row['marca_remolque'];
        $modelo = $row['modelo'];
        $unidad_serie = $row['unidad_serie'];
        $id_socio = $row['id_socio'];
        $id_conductor = $row['id_conductor'];
    }
}

 /* Se hacen cambios con el update para hacer los cambios en la base de datos */

if (isset($_POST['update'])) {
    $id = $_GET['id_remolque'];
    $placas = $row['placas'];
    $marca_remolque = $row['marca_remolque'];
    $modelo = $row['modelo'];
    $unidad_serie = $row['unidad_serie'];
    $id_socio = $row['id_socio'];
    $id_conductor = $row['id_conductor'];



    $query = "UPDATE remolque set placas = '$placas', marca_remolque = '$marca_remolque', modelo = '$modelo', unidad_serie = '$unidad_serie', id_socio='$id_socio', id_conductor = '$id_conductor' WHERE id_remolque = '$id_remolque' ";
    $resultado = mysqli_query($conexion, $query);



    header("Location: ./add_remolque_view.php");
}

?>
<!-- //FORMULARIO DE EDIT
 --><?php include("../includes/head.php") ?>

<?php include("../includes/nav.php") ?>

<main>
    <div class="h1titulo">
    </div>

</main>

<body>


    <div class="container p-4">
        <div class="row">
            <br>
            <h4>EDITAR REMOLQUE</h4>
            <p>Antes de guardar tus cambios, asegurate de seleccionar de nuevo el <b>conductor y socio</b></p>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit_remolque.php?id_remolque=<?php echo $_GET['id_remolque']; ?>" method="POST">
                        <!--  EDITA PLACAS -->

                                    <div class="row">
                                    <div class="input-field col s6">
                        <input id="placas" type="text" class="validate" autofocus name="placas" value="<?php echo $placas ?>">
                        <label for="placas">Placas</label>
                </div>
                            <!--             EDITA MARCA DE remolque-->


                            <div class="row">
                            <div class="input-field col s6">
                                <input id="marca_remolque" type="text" class="validate" name="marca_remolque" value="<?php echo $marca_remolque ?>">
                                <label for="marca_remolque">Marca Del Remolque</label>
                            </div>

                            </div>

                            <!--             EDITA MODELO
 -->
                            <div class="row">
                            <div class="input-field col s6">
                                <input id="modelo" type="text" class="validate" name="modelo" value="<?php echo $modelo ?>">
                                <label for="modelo">Modelo Del Remolque</label>
                                <span class="helper-text">El modelo del remolque puede ser diferente, segun la marca.</span>
                            </div>
                            </div>
                            <!--                 EDITA UNIDAD DE SERIE
 -->

                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="unidad_serie" type="text" class="validate" name="unidad_serie" value="<?php echo $unidad_serie ?>">
                                    <label for="unidad_serie">Unidad de Serie</label>
                                    <span class="helper-text" data-error="wrong" data-success="right">Ingresa la unidad de serie, es un codigo unico del camión</span>
                                </div>
                            </div>

                            <!-- EDITA socio                
 -->
                            <div class="row">
                            <label>Socio</label>


                                <select name="id_socio" id="id_socio" onclick="mostrarFunciones()">
                                    <?php
                                    $consulta = "SELECT * FROM socio";
                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                    $valorPredeterminado = '<?php $id_socio ?>';
                                    ?>

                                    <option value="<?php echo $id_socio ?>" style="display: none;"></option>
                                    <?php



                                    foreach ($ejecutar as $opciones) : ?>

                                        <option value="<?php echo $opciones['id_socio'] ?> "><?php echo "Socio:" ?><?php echo $opciones['nombre_socio'] ?> <?php echo $opciones['apellido_socio'] ?></option>

                                    <?php endforeach ?>
                                </select>
                            </div>


                            <!--                     EDITA CONDUCTOR
 -->
                            <div class="form-group">
                                <label>Conductor</label>


                                <select name="conductores" id="conductores" onclick="mostrarFunciones()">
                                    <?php
                                    $consulta = "SELECT * FROM conductor";
                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                    $valorPredeterminado = '<?php $id_conductor ?>';
                                    ?>

                                    <option value="<?php echo $id_conductor ?>" style="display: none;"></option>
                                    <?php



                                    foreach ($ejecutar as $opciones) : ?>

                                        <option value="<?php echo $opciones['id_conductor'] ?> "><?php echo "Conductor:" ?><?php echo $opciones['nombre_conductor'] ?> <?php echo $opciones['apellido_conductor'] ?></option>







                                    <?php endforeach ?>
                                </select>



                            </div>
                            <!-- Boton para guardar -->
                            <button class="btn btn-sucess" name="update" >
                        Update
                    </button>

                            <script type="text/javascript">
                                /*  SCRIPT PARA QUE EL MATERIALIZE TRABAJE BIEN, POR EJEMPLO, NOS SIRVE PARA QUE EL SELECT FUNCIONE CORRECTAMENTE */
                                document.addEventListener('DOMContentLoaded', function() {
                                    var elems = document.querySelectorAll('select');
                                    var instances = M.FormSelect.init(elems, arguments);
                                });
                            </script>



                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include("../includes/footer.php") ?>

</body>