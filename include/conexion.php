<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "desarro1_lizbeth", "desarro1_lizbeth", "SISACAD_DOS");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>