/*                             SCRIPT PARA QUE SE SELECIONE UN VALOR DEL SELECT POR DEFAULT
                             */
var select = document.getElementById("conductores");
select.value = "<?php echo $id_conductor ?>"; // Establecer "opcion2" como valor predeterminado