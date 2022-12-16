<?php
include "../include/conexion.php"; 
$cod_modular = $_GET['id'];

$sql = "DELETE FROM datos_institucionales WHERE cod_modular ='$cod_modular'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../DatosInstitucionales.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Eliminar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);

?>