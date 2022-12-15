<?php
include "../include/conexion.php"; 
$id = $_GET['id'];

$sql = "DELETE FROM programa_estudios WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../programa_estudios.php';
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