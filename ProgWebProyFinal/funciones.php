<!-- ESTE ARCHIVOS ES PARA HACER TODAS LAS QUERYS
 -->
<!-- FUNCION PARA SUBIR FOTO, DESDE LA VISTA DEL ADMINISTRADOR
 -->
<?php
require_once('conexionBD.php');

if (isset($_REQUEST['SubirFoto'])) {

    $nombre_foto = $_POST['nombre'];
    $apodo = $_POST['apodo'];
    $FechaNacimiento = $_POST['FecNac'];
    $Sexo = $_POST['sexo'];
    /*     PENDIENTE
 */
    $CveEspecie = $_POST['CveEspecie'];
    
    $CveTipoClasificacion = $_POST['CveTipoClasificacion'];
/*                               */
    //CODIGO PARA GUARDAR LA IMAGEN EN LA CARPETA DE SRC Y EN LA BASE DE DATOS
    $nombre_imagen = $_FILES['foto']['name']; //este nombre es para guardarlo en la imagen src
    $temporal = $_FILES['foto']['tmp_name'];
    $carpeta = './src/animales';
    $rutaImagen = $carpeta . '/' . $nombre_imagen;
    move_uploaded_file($temporal, $carpeta . '/' . $nombre_imagen);

    $query = "INSERT INTO animales(nombre,apodo,FechaNacimiento, Sexo, CveEspecie, CveTipoClasificacion, rutaImagen) VALUES ('$nombre_foto','$apodo', '$FechaNacimiento', '$Sexo', '$CveEspecie', '$CveTipoClasificacion' ,'$rutaImagen') ";

    $execute = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

    if ($execute) {
        header("Location: ./index.html");
    } else {
        echo "Hubo un error";
    }
}
?>