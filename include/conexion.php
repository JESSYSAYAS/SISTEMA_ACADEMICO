<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "", "sistema_academico-l");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>