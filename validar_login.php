<!-- ESTA CLASE HACE QUE SE VALIDE EL LOGIN
 -->
<?php

session_start();


/*INGRESAR COMO INVITADO*/


if (!empty($_POST["btnIngresarInvitado"])) {
   
      $usuario = "invitado";
      $password = "invitado";
      /*HACEMOS CONSULTA A LA BASE DE DATOS, para verificar el usuario*/
      $sql = $conexion->query("SELECT * FROM socio where usuario='$usuario' and password='$password' ");


      /* SI EXISTEN LOS DATOS DEL DEL USUARIO
 */
      if ($datos = $sql->fetch_object()) {
         header("location:./views/add_camion_view.php");
         //Guardamos el nombre de usuario en una varibale una variable de sesion, para despues utilizarla en el sidebar
         session_start();
         $_SESSION['usuario'] = $usuario;

         /*          Nombre Usuario
 */
         $query_nombre_usuario = "SELECT nombre_socio FROM socio where usuario = '$usuario'";
         $resultado = mysqli_query($conexion, $query_nombre_usuario);
         if ($fila = mysqli_fetch_assoc($resultado)) {
            $nombre_usuario = $fila['nombre_socio'];
         }

         $_SESSION['nombre_usuario'] = $nombre_usuario;

         /* Apellido */
         $query_apellido_usuario = "SELECT apellido_socio FROM socio where usuario = '$usuario'";
         $resultado2 = mysqli_query($conexion, $query_apellido_usuario);
         if ($fila = mysqli_fetch_assoc($resultado2)) {
            $apellido_usuario = $fila['apellido_socio'];
         }

         $_SESSION['apellido_usuario'] = $apellido_usuario;


      } else {
         echo '<div class="alertError">Acceso Denegado</div>';
      }
   }




/*INGRESAR */

if (!empty($_POST["btnIngresar"])) {
   if (empty($_POST["usuario"]) and empty($_POST["password"])) {
      echo '<div class="alertError">Faltó Usuario/Contraseña</div>';
   } else {
      $usuario = $_POST["usuario"];
      $password = $_POST["password"];
      /*HACEMOS CONSULTA A LA BASE DE DATOS, para verificar el usuario*/
      $sql = $conexion->query("SELECT * FROM socio where usuario='$usuario' and password='$password' ");


      /* SI EXISTEN LOS DATOS DEL DEL USUARIO
 */
      if ($datos = $sql->fetch_object()) {
         header("location:./views/add_camion_view.php");
         //Guardamos el nombre de usuario en una varibale una variable de sesion, para despues utilizarla en el sidebar
         session_start();
         $_SESSION['usuario'] = $usuario;

         /*          Nombre Usuario
 */
         $query_nombre_usuario = "SELECT nombre_socio FROM socio where usuario = '$usuario'";
         $resultado = mysqli_query($conexion, $query_nombre_usuario);
         if ($fila = mysqli_fetch_assoc($resultado)) {
            $nombre_usuario = $fila['nombre_socio'];
         }

         $_SESSION['nombre_usuario'] = $nombre_usuario;

         /* Apellido */
         $query_apellido_usuario = "SELECT apellido_socio FROM socio where usuario = '$usuario'";
         $resultado2 = mysqli_query($conexion, $query_apellido_usuario);
         if ($fila = mysqli_fetch_assoc($resultado2)) {
            $apellido_usuario = $fila['apellido_socio'];
         }

         $_SESSION['apellido_usuario'] = $apellido_usuario;


      } else {
         echo '<div class="alertError">Acceso Denegado</div>';
      }
   }
}


?>