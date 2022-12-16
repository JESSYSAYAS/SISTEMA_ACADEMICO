<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "", "sis_acad");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>}
