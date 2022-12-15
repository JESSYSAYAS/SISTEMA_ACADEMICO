<?php
include "../include/conexion.php"; 
$id = $_GET['id'];

$sql = "DELETE FROM modulo_profesional WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../modulo_formativo.php';
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