<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "desarro1_lizbeth", "ALEJANDROPACHECO", "desarro1_lizbeth");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>